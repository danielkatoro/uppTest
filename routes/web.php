<?php

use App\Http\Controllers\App_configController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::name('home')->get('/@dmin', function () {
    return view('auth.home');
})->middleware('auth');

Route::name('app_config')->get('/@dmin/app_config', [App_configController::class, 'index'])->middleware('auth');

Route::name('Save_app_config')->post('Save_app_config', [App_configController::class, 'storeApp_config'])->middleware('auth');

Route::name('edit_app_config')->get('/edit_app_config', [App_configController::class, 'index'])->middleware('auth');