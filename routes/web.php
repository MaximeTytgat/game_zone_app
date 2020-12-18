<?php

use App\Http\Controllers\AttractionController;
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

Route::resource('User', UserController::class)->except([
    'create', 'store', 'destroy'
]);
Route::resource('User', UserController::class)->only([
    'index', 'destroy'
])->middleware(['admin']);
Route::resource('Attraction', AttractionController::class);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/index', function () { return view('index'); })->name('index');
Route::get('/parc', function () { return view('parc'); })->name('parc');
Route::get('/attraction', function () { return view('attraction'); })->name('attraction');
Route::get('/plan', function () { return view('plan'); })->name('plan');
Route::get('/itinerary', function () { return view('itinerary'); })->name('itinerary');
Route::get('/pricelist', function () { return view('pricelist'); })->name('pricelist');
Route::get('/timetablecalendar', function () { return view('timetablecalendar'); })->name('timetablecalendar');
Route::get('/game', function () { return view('game'); })->name('game');
Route::get('/info', function () { return view('info'); })->name('info');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/press', function () { return view('press'); })->name('press');
Route::get('/recruitment', function () { return view('recruitment'); })->name('recruitment');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/cgv', function () { return view('cgv'); })->name('cgv');
Route::get('/cgu', function () { return view('cgu'); })->name('cgu');
Route::get('/shop', function () { return view('shop'); })->name('shop');
Route::get('/account', function () { return view('account'); })->name('account');
Route::get('/admin', function () { return view('admin'); })->name('admin');
Route::get('/legalnotice', function () { return view('legalnotice'); })->name('legalnotice');



Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
