<?php

use App\Models\App_config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App_configController;
use App\Http\Controllers\principal_baner_sectionController;

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
    $id = 2;
    $app_config = App_config::find($id);
    return view('index',compact('app_config'));
});

Route::name('home')->get('/@dmin', function () {
    $id = 2;
    $app_config = App_config::find($id);
    return view('auth.home',compact('app_config'));
})->middleware('auth');

Route::name('app_config')->get('/@dmin/app_config', [App_configController::class, 'index'])->middleware('auth');

Route::name('Save_app_config')->post('Save_app_config', [App_configController::class, 'UpdateApp_config'])->middleware('auth');

Route::name('edit_app_config')->get('/edit_app_config', [App_configController::class, 'index'])->middleware('auth');

Route::name('principal_banner')->get('/@dmin/principal_banner', [principal_baner_sectionController::class, 'index'])->middleware('auth');