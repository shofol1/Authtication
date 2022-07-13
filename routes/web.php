<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\ChangeProfile;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands=DB::table('brands')->get();
    return view('home',compact('brands'));
});
// category controller 
Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class,'editCat']);
Route::post('/category/update/{id}',[CategoryController::class,'updateCat']);
Route::get('/category/delete/{id}',[CategoryController::class,'SoftDeleteCat']);
Route::get('/category/restore/{id}',[CategoryController::class,'restoreCat']);
Route::get('/category/pDelete/{id}',[CategoryController::class,'permanentDelete']);


//product
Route::get('/product/allProduct',[ProductController::class,'AllPro'])->name('all.product');
Route::get('/product/edit/{id}',[ProductController::class,'editPro']);
Route::get('/product/softdelete/{id}',[ProductController::class,'softdeletePro']);
Route::get('/product/softdelete/{id}',[ProductController::class,'softdeletePro']);
Route::get('/product/pDelete/{id}',[ProductController::class,'permanentDelete']);
Route::post('/product/addProduct',[ProductController::class,'AddPro'])->name('store.product');
Route::post('/product/update/{id}',[ProductController::class,'updatePro']);

// Brands 
Route::get('/brand/allBrand',[BrandController::class,'allBrand'])->name('all.brand');
Route::post('/brand/addBrand',[BrandController::class,'AddBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class,'editBrand']);
Route::post('/brand/update/{id}',[BrandController::class,'updateBrand']);
Route::get('/brand/delete/{id}',[BrandController::class,'deleteBrand']);


//multi image
Route::get('/multi/image',[BrandController::class,'multiPic'])->name('multi.image');
Route::post('/multy/add',[BrandController::class,'addImage'])->name('store.image');


// Home slider 
Route::get('/home/slider',[HomeController::class,'slider'])->name('home.slider');
Route::get('/slider/create',[HomeController::class,'createSlider'])->name('create.slider');
Route::post('/home/addSlider',[HomeController::class,'AddSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class,'editSlider']);
Route::post('/slider/update/{id}',[HomeController::class,'updateSlider']);
Route::get('/slider/delete/{id}',[HomeController::class,'deleteSlider']);


// portfolio 
Route::get('/home/portfolio',[HomeController::class,'multipic'])->name('home.portfolio');
Route::get('/home/portfolio/create',[HomeController::class,'createPortfolio'])->name('create.portfolio');
Route::post('/home/portfolio/addPortfolio',[HomeController::class,'AddPortfolio'])->name('store.portfolio');

// portfolio 
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');

// contact page 

Route::get('/contact',[ContactController::class,'contactPage'])->name('contact');
Route::get('/contact/all',[ContactController::class,'AllContact'])->name('all.contact');
Route::get('/contact/allMessage',[ContactController::class,'allMessage'])->name('all.contactMessage');
Route::get('/contact/add',[ContactController::class,'addContact'])->name('add.contact');
Route::post('/contact/store',[ContactController::class,'storeContact'])->name('store.contact');
Route::post('/contact/form/store',[ContactController::class,'storeContactForm'])->name('store.contactForm');

//change password and user profile
Route::get('/user/password',[ChangePass::class,'changePassword'])->name('change.password');
Route::post('/user/updatePass',[ChangePass::class,'updatePass'])->name('update.password');

// user profile 
Route::get('/user/profile',[ChangeProfile::class,'changeProfile'])->name('user.profile');
Route::post('/user/updateProfile',[ChangeProfile::class,'updateProfile'])->name('update.profile');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // $users=User::all();
        // $users = DB::table('users')->get();
        return view('admin.index');
    })->name('dashboard');
});


Route::get('/user/logout',[BrandController::class,'logout'])->name('user.logout');