<?php

namespace App\Http\Controllers;

use App\Models\Residential;
use App\Models\Commercial;
use App\Models\GeneralSetting;
use App\Models\Admin;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    const settings = '';
    const data = [];

    function __construct(Request $request){
        // Get All Settings
        $settingsArr = optional(GeneralSetting::where('status', '1')->get())->toArray();
        $settingsArrNew = [];
        foreach($settingsArr as $singleSettings){
            $settingsArrNew[$singleSettings['name']] = $singleSettings['value'];
        }

        // Get Main Logo
        $settingsArrNew['logo'] = Admin::select('logo')->first()['logo'];
        $this->data['settings'] = $settingsArrNew;
    }

    public function index(){
        $this->data['residential_featured'] = optional(Residential::where('status', '1')->orderBy('id', 'DESC')->get())->toArray();
        $this->data['commercial_featured'] = optional(Commercial::where('status', '1')->orderBy('id', 'DESC')->get())->toArray();
        $this->data['settings']['page'] = 'home';
        return view('frontend.views.home', $this->data);
    }

    public function aboutus(){
        $this->data['settings']['page'] = 'about-us';
        return view('frontend.views.about-us', $this->data);
    }

    public function contactus(){
        $this->data['settings']['page'] = 'contact-us';
        return view('frontend.views.contact-us', $this->data);
    }

    public function cost_saving_calculator(){
        $this->data['settings']['page'] = 'cost-saving-calculator';
        return view('frontend.views.cost-saving-calculator', $this->data);
    }

    public function product_details($product_uid = 0){
        if($product_uid == 0){
            return view('frontend.views.error.404');    
        }

        $this->data['settings']['page'] = 'product-details';
        $this->data['product'] = Products::where('product_uid',$product_uid)->first();
        return view('frontend.views.product-details', $this->data);
    }

    public function commercial_listing(){
        $data['settings'] = $this->settings;
        $data['properties'] = Commercial::where('status', '1')->orderBy('id', 'DESC')->paginate(15);
        $data['url_name'] = 'commercial-properties';
        if(count($data['properties']) > 0){
            return view('frontend.views.property_listing', $data);
        }else{
            return view('frontend.views.property_listing_limit_reached', $data);
        }
    }

    public function residential_listing(){
        $data['settings'] = $this->settings;
        $data['properties'] = Residential::where('status', '1')->orderBy('id', 'DESC')->paginate(15);
        $data['url_name'] = 'residential-properties';
        if(count($data['properties']) > 0){
            return view('frontend.views.property_listing', $data);
        }else{
            return view('frontend.views.property_listing_limit_reached', $data);
        }
    }

    public function commercial_details($property_uid = 0){
        $data['settings'] = $this->settings;
        $data['propertyData'] = Commercial::where(['status' => '1','property_uid' => $property_uid])->first();
        $data['similar_property'] = Commercial::where(['status' => '1',['property_uid', '!=', $property_uid]])->get();
        $data['url_name'] = 'Commercial Properties';
        if(!empty($data['propertyData'])){
            return view('frontend.views.property_detail', $data);
        }else{
            return view('frontend.views.errors.404', $data);
        }
        return view('frontend.views.property_detail', $data);
    }

    public function residential_details($property_uid = 0){
        $data['settings'] = $this->settings;
        $data['propertyData'] = Residential::where(['status' => '1','property_uid' => $property_uid])->first();
        $data['similar_property'] = Residential::where(['status' => '1',['property_uid', '!=', $property_uid]])->get();
        $data['url_name'] = 'Residential Properties';
        if(!empty($data['propertyData'])){
            return view('frontend.views.property_detail', $data);
        }else{
            return view('frontend.views.errors.404', $data);
        }
        return view('frontend.views.property_detail', $data);
    }
}