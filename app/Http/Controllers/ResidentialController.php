<?php

namespace App\Http\Controllers;

use App\Models\Residential;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResidentialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['properties'] = Residential::orderBy('id','desc')->get();
        $data['page_type'] = 'residentialAll'; 
        return view('admin.residential.manageProperties', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page_type'] = 'residentialAdd'; 
        return view('admin.residential.addProperty', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'sale_price' => 'required',
            'carpet' => 'nullable',
            'parking' => 'nullable|string|max:255',
            'floor' => 'nullable',
            'location' => 'nullable|string|max:255',
            'furnished' => 'nullable|string|in:furnished,unfurnished,semi-furnished',
            'building_age' => 'nullable',
            'landmark' => 'nullable|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'availability_date' => 'nullable|date',
            'property_assets.*' => 'file|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
            'property_details' => 'required|string',
        ]);

        $assets = [];
        $propertyUid = Str::uuid()->toString();

        foreach ($request->file('property_assets') as $asset) {
            $type = strpos($asset->getMimeType(), 'video') === 0 ? 'video' : 'image';
        
            $filename = Str::random(20) . '.' . $asset->getClientOriginalExtension();
            $path = $asset->storeAs('property_assets/' . $propertyUid, $filename);
            
            $assetPath = 'storage/app/' . $path;
            $assets[] = [
                'type' => $type,
                'path' => $assetPath,
            ];            
        }

        $validatedData['property_uid'] = $propertyUid;
        $validatedData['property_assets'] = json_encode($assets);
        $validatedData['status'] = '1';
        $update = Residential::create($validatedData);
        if($update){
            return response()->json([
                'message'=>'Residential Property Created Successfully!',
                'type'=>'success'
            ]);
        }else{
            return response()->json([
                'message'=>'Something went wrong, try again later!',
                'type'=>'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Residential $residential)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['page_type'] = 'residentialEdit'; 
        $data['property_data'] = Residential::where('id', $id)->first(); 
        return view('admin.residential.editProperty', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $validatedData = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'sale_price' => 'required',
            'carpet' => 'nullable',
            'parking' => 'nullable|string|max:255',
            'floor' => 'nullable',
            'location' => 'nullable|string|max:255',
            'furnished' => 'nullable|string|in:furnished,unfurnished,semi-furnished',
            'building_age' => 'nullable',
            'landmark' => 'nullable|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'availability_date' => 'nullable|date',
            'property_details' => 'required|string',
        ]);

        $validatedData['status'] = '1';
        $update = Residential::whereId($id)->update($validatedData);
        if($update){
            return response()->json([
                'message'=>'Residential Property Updated Successfully!',
                'type'=>'success'
            ]);
        }else{
            return response()->json([
                'message'=>'Something went wrong, try again later!',
                'type'=>'error'
            ]);
        }
    }

    public function getAssets(Request $request, $property_uid){
        $this->checkUserType($request);
        $html = 'No Assets Found!, Please Upload some.';
        $property = Residential::select('property_uid','property_assets')->where('property_uid' , $property_uid)->first();

        
        if(!empty($property->property_assets)){

            $assetData = json_decode($property->property_assets,true);
            if(count($assetData) > 0 ){
                $html = '';
                foreach($assetData as $key => $singleData){
                    if($singleData['type'] == 'video'){   
                        $assets = "<video class='mb-3' src='".env('STORAGE_URL').$singleData['path']."' style='height: 100px;border: 1px solid #000;' controls></video>";
                    }else{
                        $assets = "<img class='mb-3' src='".env('STORAGE_URL').$singleData['path']."' alt='' style='height: 100px;border: 1px solid #000;'>";
                    }
                    $html .= "<hr><div class='mb-3' style='display:grid;width: 50%;'>$assets<button onclick=deleteAsset('$property_uid','$key') class='btn btn-danger' style='width:max-content'>delete Asset</button></div>";
                }

                return response()->json([
                    'message' => 'Property Assets Found!',
                    'type' => 'success',
                    'html' => $html
                ]);
            }else{
                return response()->json([
                    'message' => 'No Assets Found! Add New',
                    'type' => 'error',
                    'html' => $html
                ]);
            }
        }else{
            return response()->json([
                'message' => 'No Assets Found! Add New',
                'type' => 'error',
                'html' => $html
            ]);
        }
    }

    public function addAssets(Request $request){

        $validatedData = $request->validate([
            'property_uid' => 'required|string',
            'property_assets.*' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
        ]);

        if(empty($request->property_assets) || count($request->property_assets) <= 0){
            return response()->json([
                'message'=>'Please select atleast 1 file!',
                'type'=>'error'
            ]);
        }


        $propertyDetails = Residential::select('property_assets')->where('property_uid', $validatedData['property_uid'])->first();
        if($propertyDetails && isset($propertyDetails->property_assets)){
            $assetsArr = json_decode($propertyDetails->property_assets, true);
            
            $assets = count($assetsArr) > 0 ? $assetsArr : [];

            foreach ($request->file('property_assets') as $asset) {
                $type = strpos($asset->getMimeType(), 'video') === 0 ? 'video' : 'image';
            
                $filename = Str::random(20) . '.' . $asset->getClientOriginalExtension();
                $path = $asset->storeAs('property_assets/' . $validatedData['property_uid'], $filename);
                
                $assetPath = 'storage/app/' . $path;
                $assets[] = [
                    'type' => $type,
                    'path' => $assetPath,
                ];            
            }
    
            $property_assets = json_encode($assets);
            $update = Residential::where('property_uid',$validatedData['property_uid'])->update(['property_assets' => $property_assets]);
            if($update){
                return response()->json([
                    'message'=>'Residential Property Assets Updated Successfully!',
                    'type'=>'success'
                ]);
            }else{
                return response()->json([
                    'message'=>'Something went wrong, try again later!',
                    'type'=>'error'
                ]);
            }
        }else{
            return response()->json([
                'message'=>'Something went wrong, try again later!',
                'type'=>'error'
            ]);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, $property_uid)
    {
        $this->checkUserType($request);
        $property = Residential::where('property_uid' , $property_uid)->first();

        if($property){

            if($property->status == '1')
                $status = '0';
            else if($property->status == '0')
                $status = '1';

            $delete = Residential::where('property_uid' , $property_uid)->update(['status' => $status]);

            if($delete){
                return response()->json([
                    'message'=>'Residential Property Status Updated Successfully!',
                    'type'=>'success',
                    'status' => ($status == '1' ? 'Active' : 'Deactive')
                ]);
            }else{
                return response()->json([
                    'message'=>'Something went wrong, try again later!',
                    'type'=>'error'
                ]);
            }
        }else{
            return response()->json([
                'message'=>'Invalid Property Unique ID!',
                'type'=>'error'
            ]);
        }
    }

    public function deleteAssets(Request $request, $property_uid, $key){
        $this->checkUserType($request);
        // remove image from property DB
        $propertyDetails = Residential::select('property_assets')->where('property_uid', $property_uid)->first();
        
        if($propertyDetails && isset($propertyDetails->property_assets)){
            $assetsArr = json_decode($propertyDetails->property_assets, true);

            if(isset($assetsArr[$key])){
                $imagePath = $assetsArr[$key]['path']; // Specify the image path

               
                if ($this->deleteImage($imagePath)) {

                    unset($assetsArr[$key]);
                    $newArr = json_encode($assetsArr);
                    Residential::where('property_uid', $property_uid)->update(['property_assets' => $newArr]);

                    return response()->json([
                        'message'=>'Residential Property Asset deleted Successfully!',
                        'type'=>'success'
                    ]);
                }else {
                    return response()->json([
                        'message'=>'Something went wrong, try again later.aasa',
                        'type'=>'error'
                    ]);
                }
            }else {
                return response()->json([
                    'message'=>'Something went wrong, try again later.',
                    'type'=>'error'
                ]);
            }
        }
    }

    public function deleteImage($imagePath)
    {
        if (file_exists($imagePath)) {
            unlink($imagePath);
            return true;
        }
        return false;
    }

    public function checkUserType(Request $request){
        // Check User Type and Redirect
        if($request->session()->has('user_type') && $request->session()->get('user_type') != 'admin')
          return redirect()->route('adminlogin');
    }
}
