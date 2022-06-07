<?php

use App\Http\Controllers\ContactController;
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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Reyner Atira Prasetyo",
        "email" => "3103120193@student.smktelkom-pwt.sch.id",
        "gambar" => "reyner.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

//Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create'); 
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store'); 

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
    route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index'); 
    route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit'); 
    route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update'); 
    route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy'); 
});
