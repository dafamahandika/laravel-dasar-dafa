<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('landing', function() {
    return view('landing_page');
});
Route::get('/index',[HelloController::class, 'index' ]) -> name('index') -> middleware('auth');

Route::get('/indexActivity',[HelloController::class, 'indexActivity' ]) -> name('indexActivity') -> middleware('auth');
Route::post('/storeActivity',[HelloController::class, 'storeActivity' ]) -> name('storeActivity');

Route::get('/indexEditActivity/{id}',[HelloController::class, 'indexEditActivity' ]) -> name('indexEditActivity') -> middleware('auth');
Route::post('/updateActivity/{id}',[HelloController::class, 'updateActivity' ]) -> name('updateActivity');
Route::post('/deleteActivity/{id}',[HelloController::class, 'deleteActivity' ]) -> name('deleteActivity');
Route::get('/register',[RegisterController::class, 'index' ]) -> name('register')-> middleware('guest');
Route::post('/registerstore',[RegisterController::class, 'store' ]) -> name('registerstore');
Route::get('/login',[LoginController::class, 'index' ]) -> name('login') -> middleware('guest');
Route::post('/loginAuth',[LoginController::class, 'auth' ]) -> name('auth');
route::get('/logout',[LoginController::class, 'logout']) -> name('logout');
