<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');
});

Route::get('/userdata',function(){
    return view('userdata'); //ไฟล์ที่ต้องการไปหา
})->name('userdata');

Route::get('/itemsadd',function(){
    return view('itemsadd'); //ไฟล์ที่ต้องการไปหา
})->name('itemsadd');

Route::get('/items',function(){
    return view('items'); //ไฟล์ที่ต้องการไปหา
})->name('items');

Route::get('/adduser',function(){
    return view('adduser'); //ไฟล์ที่ต้องการไปหา
})->name('adduser');

Route::get('/profile',function(){
    return view('profile'); //ไฟล์ที่ต้องการไปหา
})->name('profile');

Route::get('/edituser/{id}',function($id){
    return view('edituser',compact('id')); //ไฟล์ที่ต้องการไปหา
})->name('edituser');

Route::get('/edititem/{id}',function($id){
    return view('edititem',compact('id')); //ไฟล์ที่ต้องการไปหา
})->name('edititem');
