<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\FrontendController; 
use App\Http\Controllers\SettingController; 
use App\Http\Controllers\TestimonialController; 
use App\Http\Controllers\SliderController; 
use App\Http\Controllers\TodayspecialController; 
use App\Http\Controllers\EventController; 
use App\Http\Controllers\OrderController; 
use App\Http\Controllers\RailwayController; 
use App\Http\Controllers\MemberContoller; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  Route::get('/',[FrontendController::class,'index']);
  
 // category

   Route::get('category', function () { return view('frontend.category.index');})->name('frontend.category.index');
   Route::get('add-category',[CategoryController::class,'create']);
   Route::post('add-category',[CategoryController::class,'store']);
   Route::get('edit-category/{id}',[CategoryController::class,'edit']);
   Route::put('updatecategory/{id}',[CategoryController::class,'update']);
   Route::get('delete-category/{id}',[CategoryController::class,'destroy']);

  //  event
  Route::get('events',[EventController::class,'index']);
  Route::get('event',[EventController::class,'eventhome']);
  Route::get('add-event',[EventController::class,'create']);
   Route::post('add-event',[EventController::class,'store']);
   Route::get('edit-event/{id}',[EventController::class,'edit']);
   Route::put('updateevent/{id}',[EventController::class,'update']);
   Route::get('delete-event/{id}',[EventController::class,'destroy']);
   Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');
   
 


    // Product
  Route::get('/place/{slug}', [ProductController::class, 'show']);
   Route::get('products',[ProductController::class,'index']);
   Route::get('add-product',[ProductController::class,'create']);
   Route::post('add-product',[ProductController::class,'store']);
   Route::get('edit-product/{id}',[ProductController::class,'edit']);
   Route::put('updateproduct/{id}',[ProductController::class,'update']);
   Route::get('delete-product/{id}',[ProductController::class,'destroy']);
 
   //Contact
    Route::get('contact',[ContactController::class,'index']);
     Route::post('add',[ContactController::class,'add']);
    Route::get('edit-contact/{id}',[ContactController::class,'edit']);
    Route::put('updatecontact/{id}',[ContactController::class,'update']);
    Route::get('delete-contact/{id}',[ContactController::class,'destroy']);

    //settings
    Route::get('setting',[SettingController::class,'index']);
    Route::get('add-setting',[SettingController::class,'create']);
    Route::post('add-logo',[SettingController::class,'storelogo']);
    Route::post('add-details',[SettingController::class,'storedetails']);
    Route::get('edit-setting/{id}',[SettingController::class,'edit']);
    Route::put('updatesetting/{id}',[SettingController::class,'update']);
    Route::get('delete-setting/{id}',[SettingController::class,'destroy']);

    //TestimonialController
     Route::get('testimonial',[TestimonialController::class,'index']);
     Route::get('add-testimonial',[TestimonialController::class,'create']);
     Route::post('add-testimonial',[TestimonialController::class,'store']);
    Route::get('edit-testimonial/{id}',[TestimonialController::class,'edit']);
    Route::put('updatetestimonial/{id}',[TestimonialController::class,'update']);
    Route::get('delete-testimonial/{id}',[TestimonialController::class,'destroy']);

    //slider
    Route::get('slider',[SliderController::class,'index']);
    Route::get('add-slider',[SliderController::class,'create']);
    Route::post('add-slider',[SliderController::class,'store']);
    Route::get('edit-slider/{id}',[SliderController::class,'edit']);
    Route::put('update-slider/{id}',[SliderController::class,'update']);
    Route::get('delete-slider/{id}',[SliderController::class,'destroy']);

    //todayspecial slider
    Route::get('todayspecial',[TodayspecialController::class,'index']);
    Route::get('add-todayspecial',[TodayspecialController::class,'create']);
    Route::post('add-todayspecial',[TodayspecialController::class,'store']);
    Route::get('edit-todayspecial/{id}',[TodayspecialController::class,'edit']);
    Route::put('update-todayspecial/{id}',[TodayspecialController::class,'update']);
    Route::get('delete-todayspecial/{id}',[TodayspecialController::class,'destroy']);

    //Order 
    Route::get('orderpage',[OrderController::class,'index']);
    Route::get('order',[OrderController::class,'frontorder']);
    Route::post('order',[OrderController::class,'ordered']);
    Route::get('edit-order/{id}',[OrderController::class,'edit']);
    Route::put('update-order/{id}',[OrderController::class,'update']);
    Route::get('delete-order/{id}',[OrderController::class,'destroy']);
    Route::get('details',[OrderController::class,'details']);
    //menu

// ... (other use statements at the top)

Route::get('place', [App\Http\Controllers\ProductController::class, 'menu'])->name('menu.index'); // <--- ADDED ->name('menu.index')

Route::get('/railway-route', [RailwayController::class, 'index'])->name('railway.route');

Route::get('members',[MemberContoller::class,'index']);


Route::get('products/{product:slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

// ... (rest of your routes)

   
   Route::middleware(['auth'])->group(function(){
    Route::get('/profileedit',function(){ return view('profile.edit');})->name('profile.edit');
    Route::get('/home', function () { return view('dashboard');})->name('home');
    Route::get('/table',function(){ return view('pages.table_list');})->name('table');
    Route::get('/typography',function(){ return view('pages.typography');})->name('typography');
    Route::get('/icons',function(){ return view('pages.icons');})->name('icons');
    Route::get('/map',function(){return view('pages.map');})->name('map');
    Route::get('/noti',function(){return view('pages.notifications');})->name('notifications');
    Route::get('/language',function(){return view('pages.language');})->name('language');
    Route::get('/userindex', [UserController::class,"index"])->name('user.index');
    Route::get('/category', [CategoryController::class,"index"])->name('frontend.category.index');


    Route::resource('/roles',RoleController::class)->names([
        'index'=>'role.index',
       'create'=>'role.create',
       'destroy'=>'role.delete',
       'store'=>'role.store',
       'edit'=>'role.edit',
       'update'=>'role.update'
    ]);
    Route::get('/rolesassign',[RoleController::class,'assign']);
    Route::get('/roleassign/{id}',[RoleController::class,'assignToPermissions']);
    Route::post('/roleassign/{id}',[RoleController::class,'AssignPermissionToRole']);

    Route::resource('/permissions',PermissionController::class)->names([
        'index'=>'permission.index',
       'create'=>'permission.create',
       'destroy'=>'permission.delete',
       'store'=>'permission.store',
       'edit'=>'permission.edit',
       'update'=>'permission.update'
    ]);
    Route::get('/forbidden',[Controller::class,'forbidden']);

    Route::get('/assignrole/{id}',[UserController::class,'assignRoleView'])->name('roleassign');
    Route::post('assignrole/{id}',[UserController::class,'assignRoleStore'])->name('roleassignstore');
});
