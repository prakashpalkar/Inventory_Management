<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});



Route::get('/2', function () {
    return view('2');
});

Route::get('/3', function () {
    return view('3');
});


Route::get('/dataview', function () {
    return view([CustomerControler::class,'view']);
});


Route::get('/3', function () {
    return view('3');
});



Route::get('/customer', function () {
    $customer=Customers::all();
    echo"<pre>fdhgfh";
    echo"trytry";
print_r($customer);


});


Route::get('/3', function () {
    return view('3');
});




Route::get('/3', function () {
    return view('3');
});





Route::get('/3', function () {
    return view('3');
});
