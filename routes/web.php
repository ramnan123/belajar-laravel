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
    return view('welcome');
});
Route::get('foo', function () {
    return ("Hello World");
});
// parameter optional
// Route::get('user/{name?}',function($name= 'john'){
//     return $name;
// // });
// Route::get('/user/profile', function () {
//     return ("ayam");
// })->name('profile');

// Route::name('/admin')->group(function () {
//     Route::get('/users', function () {
//         return "admin > user";
//     });
// });
