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
    return redirect () -> route('index');
});

Route::get('/index',[HelloController::class, 'index' ]) -> name('index');
Route::get('/about',[HelloController::class, 'getAbout' ]) -> name('about');

Route::get('/indexActivity',[HelloController::class, 'indexActivity' ]) -> name('indexActivity');
Route::post('/storeActivity',[HelloController::class, 'storeActivity' ]) -> name('storeActivity');

Route::get('/indexEditActivity/{d}',[HelloController::class, 'indexEditActivity' ]) -> name('indexEditActivity');
Route::post('/updateActivity/{id}',[HelloController::class, 'updateActivity' ]) -> name('updateActivity');
