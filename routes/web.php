<?php

use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\GalleryController;

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
    return view('home');
    // return view('welcome');
});

Route::get('/lineage', function () {
    return view('lineage');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/gallery', function () {
    $images = Gallery::all();
    return view('gallery', compact('images'));
});

Route::get('/centres', function () {
    return view('centres');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::post('/products', [GalleryController::class, 'add'])->name('img.add');
