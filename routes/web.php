<?php

use App\Http\Controllers\AttractionController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/parc', [HomeController::class, 'parc'])->name('parc');
Route::get('/attraction', [HomeController::class, 'attraction'])->name('attraction');
Route::get('/plan', [HomeController::class, 'plan'])->name('plan');
Route::get('/itinerary', [HomeController::class, 'itinerary'])->name('itinerary');
Route::get('/pricelist', [HomeController::class, 'pricelist'])->name('pricelist');
Route::get('/timetablecalendar', [HomeController::class, 'timetablecalendar'])->name('timetablecalendar');
Route::get('/game', [HomeController::class, 'game'])->name('game');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/press', [HomeController::class, 'press'])->name('press');
Route::get('/recruitment', [HomeController::class, 'recruitment'])->name('recruitment');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/cgv', [HomeController::class, 'cgv'])->name('cgv');
Route::get('/cgu', [HomeController::class, 'cgu'])->name('cgu');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::get('/legalnotice', [HomeController::class, 'legalnotice'])->name('legalnotice');
/* Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');
 */
/* 
Route::get('ENG/abouten', [HomeController::class, 'abouten'])->name('abouten');
Route::get('ENG/pricelisten', [HomeController::class, 'pricelisten'])->name('pricelisten');


 */

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
