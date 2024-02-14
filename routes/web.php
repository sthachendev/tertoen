<?php

use App\Http\Controllers\SearchController;
use App\Models\Activity;
use App\Models\Gallery;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\VolunteerController;

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
});

Route::get('/admin/login', function () {
    return view('admin.login');
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

Route::get('/oraganogram', function () {
    return view('oraganogram');
});

Route::get('/activities', function () {
    $activities = Activity::all();
    return view('activities', compact('activities'));
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/onetimedonate', function () {
    return view('one_time_donate');
});

Route::get('/yearlydonate', function () {
    return view('yearly_donate');
});

Route::get('/monthlydonate', function () {
    return view('monthly_donate');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/admin/events', function () {
    $activities = Activity::all();
    return view('admin.events', compact('activities'));
});

Route::get('/admin/gallery', function () {
    $images = Gallery::all();
    return view('admin.gallery', compact('images'));
});

Route::get('/admin/volunteer', function () {
    // lastest data first
    $volunteers = Volunteer::orderBy('created_at', 'desc')->paginate(6);

    return view('admin.volunteer', compact('volunteers'));
});

Route::get('/admin/search', [VolunteerController::class, 'search'])->name('admin.search');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('/gallery-add', [GalleryController::class, 'add'])->name('img.add');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::delete('/gallery/{id}', [GalleryController::class, 'deleteImage'])->name('image.delete');

Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::get('/activities/{title}', [ActivityController::class, 'show'])->name('activities.show');
Route::delete('/activities/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');

Route::post('/volunteer/store', [VolunteerController::class, 'store'])->name('volunteer.store');
Route::delete('/volunteers/{id}', [VolunteerController::class, 'destroy'])->name('volunteers.destroy');
