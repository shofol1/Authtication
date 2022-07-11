<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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
Route::get('/slider/edit',[HomeController::class,'editSlider'])->name('edit.slider');
Route::post('/home/addSlider',[HomeController::class,'AddSlider'])->name('store.slider');


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