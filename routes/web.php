<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sitemap.xml', 'SiteMapController@index');
Route::view('/quienes_somos', 'web/quienes_somos');
Route::get('/programas_a', [App\Http\Controllers\HomeController::class, 'showUniversidades']);
Route::view('/programas_b', 'web/programas_b');
Route::view('/servicios', 'web/servicios');
Route::view('/courier', 'web/courier');
Route::view('/testimonios', 'web/testimonios');
Route::view('/politica-de-privacidad', 'web/politica-de-privacidad');
Route::view('/gracias', 'web/gracias');
Route::view('/contactos', 'web/contactos');
Route::view('/personas', 'web/personas');
Route::view('/politicas', 'web/politicas');
Route::view('/privacidad', 'web/privacidad');
Route::view('/terminos', 'web/terminos');
Route::view('/cookies', 'web/cookies');