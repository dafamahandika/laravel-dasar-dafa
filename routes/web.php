<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('/index',[HelloController::class, 'index' ]) -> name('index');
Route::get('/about',[HelloController::class, 'getAbout' ]) -> name('about');

Route::get('/indexActivity',[HelloController::class, 'indexActivity' ]) -> name('indexActivity');
Route::post('/storeActivity',[HelloController::class, 'storeActivity' ]) -> name('storeActivity');
