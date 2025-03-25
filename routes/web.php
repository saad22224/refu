<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\CodeController;
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
    return view('welcome');
});
Route::get('forms', function () {
    return view('forms');
});


Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale');


Route::post('/api/search', [CodeController::class, 'search']);



// admin


Route::get('/uniadmin', function () {
    return view('dashboard.login');
})->name('admin');



Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard');


Route::get('/admincode', function() {
    return view('dashboard.code');
});





Route::post('/admin/login', [AdminLogin::class , 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminLogin::class , 'logout'])->name('admin.logout');
Route::resource('codes', AdminController::class)->middleware('auth');