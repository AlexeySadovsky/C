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

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
});

Route::get('microview', [\App\Http\Controllers\Admin\AdminController::class, 'microView']);

Route::get('my-first-page', [App\Http\Controllers\MyController::class, 'myFunction']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//===============================================Country==========================================

//Route::get('countries', [App\Http\Controllers\CountryController::class, 'index']);
//
//Route::get('countries/create', [App\Http\Controllers\CountryController::class, 'create']);
//
//Route::post('countries/store', [App\Http\Controllers\CountryController::class, 'store'])->name('admin.store_country');
//
//Route::get('countries/{id}/edit', [App\Http\Controllers\CountryController::class, 'edit'])->name('admin.edit_country');
//
//Route::put('countries/edit/{id}/update', [App\Http\Controllers\CountryController::class, 'update'])
//    ->name('admin.update_country');
//
//Route::delete('countries/edit/{id}/delete', [App\Http\Controllers\CountryController::class, 'delete'])
//    ->name('admin.delete_country');

Route::resource('country', \App\Http\Controllers\Admin\CountryController::class)
->except('show');
