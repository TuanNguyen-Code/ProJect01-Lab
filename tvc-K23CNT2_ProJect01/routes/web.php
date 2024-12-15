<?php

use App\Http\Controllers\quanlitaikhoan;
use Illuminate\Support\Facades\Route;

use function Illuminate\Events\queueable;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page01', function () {
    return "<h1>Hello World, I'm Tuan. </h1>";
});
#Redirect
Route::redirect('/here','/three');

Route::get('/three', function (){
    return "<h1>Redirect to Three </h1>";
});

#Router return view
Route::get('/MinhTuan', function (){
    return view('tuannguyen');
});
#Router parameter
Route::get('/Page02/{id}', function($id){
    return "<h1>Hello ".$id . "</h1>";
});
#Opsional paremeter
Route::get('/Page03/{name?}', function($name = "Minh Tuan"){
    return "<h1>Hello ".$name . "</h1>";
});
Route::get('/Account',[quanlitaikhoan::class, 'index'])->name('tvcTaikhoan.index');
Route::get('/TaoTaiKhoan', [quanlitaikhoan::class, 'create']);
Route::get('/ChiTietTaiKhoan', [quanlitaikhoan::class, 'show']);
Route::get('/showdata', [quanlitaikhoan::class, 'showdata']);
Route::get('/DSTaiKhoan', [quanlitaikhoan::class, 'listAccount']);
Route::get('/All-TK', [quanlitaikhoan::class, 'GETALL']);