<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'login']);
Route::get('/login/create',[LoginController::class,'create']);
Route::post('/login/store',[LoginController::class,'store']);
/*
Route::get('/login/product',[ProductController::class,'entreproduct']);
Route::post('/login/product/store_admin',[ProductController::class,'store_admin']);
*/

Auth::routes();

/*create new products*/
Route::post('/home/store_admin', [App\Http\Controllers\HomeController::class, 'store_admin'])->name('home');
Auth::routes();
Route::get('/home/store_admin', [App\Http\Controllers\HomeController::class, 'store_admin']);
Auth::routes();
Route::get('/home', [HomeController::class, 'create_product']);



/*contact*/
Auth::routes();
Route::post('/store_contact',[HomeController::class,'store1']);

Auth::routes();
Route::get('/store_contact', [App\Http\Controllers\HomeController::class,'pagemain']);

Auth::routes();
Route::get('/',[HomeController::class,'create']);

/*Route::get('/main',[MainController::class,'main']);
/*Route::get('/main',[MainController::class,'create_list']);*/

