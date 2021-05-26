<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('add_data', function () {
    return view('Add_Data');
});
Route::post('/add_data',[UserController::class,'addData']);

Route::get ('detail_data/{id}',[UserController::class,'getSingleData']);
// Route::get('/display_data',function(){
//     return view('Display_Data');
// });
Route::get('cart',[UserController::class,'getcartData']);
Route::get('display_data',[UserController::class,'getData']);


Route::get('delete_data/{id}',[UserController::class,'deleteData']);


Route::get('edit_data/{id}',[UserController::class,'editData']);

Route::post('update_data',[UserController::class,'updateData']);

Route:: post( 'addtocart',[UserController::class,'addtoCart']);
Route ::get('removefromCart/{id}',[UserController::class,'removeItemfromCart']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
