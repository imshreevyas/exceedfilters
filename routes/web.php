<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\ResidentialController;
use App\Http\Controllers\GeneralSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Frontend Pages Get Request
Route::get('/',[FrontendController::class, 'index']);
Route::get('/about-us',[FrontendController::class, 'aboutus']);
Route::get('/products',[FrontendController::class, 'products']);
Route::get('/product-details/{product_id}',[FrontendController::class, 'product-details']);
Route::get('/cost-saving-calculation',[FrontendController::class, 'cost-saving-calculator']);
Route::get('/contact-us',[FrontendController::class, 'contact-us']);

// Frontend Pages Post Request.
Route::post('/product-enquiry',[FrontendController::class, 'submit-enquiry-form']);
Route::post('/contact-us',[FrontendController::class, 'submit-contact-form']);

// Admin PAnel Routes
Route::prefix('admin')->group(function () {

    Route::get('/',[AdminController::class,'adminLoginPage']);
    Route::get('/login',[AdminController::class,'adminLoginPage'])->name('adminLoginPage');
    Route::get('/dashboard',[AdminController::class,'adminDashboard'])->name('adminDashboard');
    Route::get('/account',[AdminController::class,'adminAccountPage'])->name('adminDashboard');
    Route::get('/leads',[AdminController::class,'leads'])->name('leads');
    
    Route::get('/commercial/all',[CommercialController::class,'index'])->name('commercial');
    Route::get('/commercial/add',[CommercialController::class,'create'])->name('commercialAdd');
    Route::get('/commercial/edit/{id}',[CommercialController::class,'edit'])->name('commercialAdd');
    Route::get('/commercial/assets/get/{property_uid}',[CommercialController::class,'getAssets'])->name('commercialGetAssets');
    
    Route::get('/residential/all',[ResidentialController::class,'index'])->name('residential');
    Route::get('/residential/add',[ResidentialController::class,'create'])->name('residentialAdd');
    Route::get('/residential/edit/{id}',[ResidentialController::class,'edit'])->name('commercialAdd');
    Route::get('/residential/assets/get/{property_uid}',[ResidentialController::class,'getAssets'])->name('commercialGetAssets');
    
    Route::get('/settings/all',[GeneralSettingController::class,'index'])->name('settings');

    Route::get('/forgot-password',[AdminController::class,'forgotPassword'])->name('forgot-password');
    Route::get('/generate-password/{newpass}',[AdminController::class,'generatePassword'])->name('generatePassword');
    
    
    // Post Routes
    Route::post('/adminLoginPost',[AdminController::class,'adminLoginPost']);
    
    Route::post('/commercial/add',[CommercialController::class,'store'])->name('commercialAddPost');
    Route::post('/commercial/edit/{id}',[CommercialController::class,'update'])->name('commercialEdit');
    Route::post('/commercial/delete/{property_uid}',[CommercialController::class,'delete'])->name('commercialEdit');
    Route::post('/commercial/addAssets',[CommercialController::class,'addAssets'])->name('commercialAddAssets');
    Route::post('/commercial/deleteAssets/{property_uid}/{key}',[CommercialController::class,'deleteAssets'])->name('commercialDeleteAssets');
    
    Route::post('/residential/add',[ResidentialController::class,'store'])->name('residentialAddPost');
    Route::post('/residential/edit/{id}',[ResidentialController::class,'update'])->name('residentialEdit');
    Route::post('/residential/delete/{property_uid}',[ResidentialController::class,'delete'])->name('residentialDelete');
    Route::post('/residential/addAssets',[ResidentialController::class,'addAssets'])->name('residentialAddAssets');
    Route::post('/residential/deleteAssets/{property_uid}/{key}',[ResidentialController::class,'deleteAssets'])->name('residentialDeleteAssets');
    
    
    Route::post('/settings/all/',[AdminController::class,'settingEdit'])->name('settingEdit');
    Route::post('/settings/edit/{id}',[GeneralSettingController::class,'update'])->name('settingEdit');
    Route::post('/settings/delete/{id}',[GeneralSettingController::class,'destroy'])->name('settingEdit');
    Route::post('/settings/add',[GeneralSettingController::class,'store'])->name('settingAdd');
    
    Route::post('/account/{id}',[AdminController::class,'adminAccountUpdate'])->name('adminDashboard');
    
});
