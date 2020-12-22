<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ExperienceController;

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

Route::get('xp/{id}', [ExperienceController::class, 'addExperience'])->name('addExperience');

Route::resource('Attraction', AttractionController::class);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/cgv', [HomeController::class, 'cgv'])->name('cgv');
Route::get('/cgu', [HomeController::class, 'cgu'])->name('cgu');
Route::get('/parc', [HomeController::class, 'parc'])->name('parc');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/plan', [HomeController::class, 'plan'])->name('map');
Route::get('/game', [HomeController::class, 'game'])->name('game');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/press', [HomeController::class, 'press'])->name('press');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');
Route::get('/itinerary', [HomeController::class, 'itinerary'])->name('itinerary');
Route::get('/pricelist', [HomeController::class, 'pricelist'])->name('pricelist');
Route::get('/attraction', [HomeController::class, 'attraction'])->name('attraction');
Route::get('/recruitment', [HomeController::class, 'recruitment'])->name('recruitment');
Route::get('/legalnotice', [HomeController::class, 'legalnotice'])->name('legalnotice');



Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
