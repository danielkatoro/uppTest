<?php

use App\Models\App_config;
use App\Models\faq_section;
use App\Models\principal_banner;
use App\Models\last_news_section;
use App\Models\buy_and_sell_section;
use App\Models\crypto_slide_section;
use App\Models\download_app_section;
use App\Models\testimonials_section;
use Illuminate\Support\Facades\Route;
use App\Models\parteners_logo_section;
use App\Models\start_traiding_section;
use App\Models\amazing_features_section;
use App\Models\additional_service_section;
use App\Http\Controllers\App_configController;
use App\Http\Controllers\faq_sectionController;
use App\Http\Controllers\get_ready_sectionController;
use App\Http\Controllers\last_news_sectionController;
use App\Http\Controllers\buy_and_sell_sectionController;
use App\Http\Controllers\crypto_slide_sectionController;
use App\Http\Controllers\download_app_sectionController;
use App\Http\Controllers\testimonials_sectionController;
use App\Http\Controllers\parteners_logo_sectionController;
use App\Http\Controllers\start_traiding_sectionController;
use App\Http\Controllers\principal_baner_sectionController;
use App\Http\Controllers\amazing_features_sectionController;
use App\Http\Controllers\additiona_service_sectionController;
use Illuminate\Support\Facades\DB;

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
    $id1=1;
    $principal_banner = principal_banner::find($id1);
    $crypto_slide = crypto_slide_section::all();
    $buy_and_sell = buy_and_sell_section::all();
    $parteners_logo = parteners_logo_section::all();
    $download_app = download_app_section::all();
    $amazing_features = amazing_features_section::all();
    $additional_service = additional_service_section::all();
    $start_training = start_traiding_section::all();
    $faq1 = DB::select("SELECT * FROM faq_sections LIMIT 5");
    $faq2 = DB::select("SELECT * FROM faq_sections LIMIT 5");
    $testimonials = testimonials_section::all();
    $last_news = last_news_section::all();

    return view('index',compact('app_config','principal_banner','crypto_slide','buy_and_sell','parteners_logo','download_app','amazing_features','additional_service','start_training','faq1','faq2','testimonials','last_news'));
});

Route::name('home')->get('/@dmin', function () {
    $id = 2;
    $app_config = App_config::find($id);
    $testimonials = testimonials_section::all();
    return view('auth.home',compact('app_config','testimonials'));
})->middleware('auth');

Route::name('app_config')->get('/@dmin/app_config', [App_configController::class, 'index'])->middleware('auth');

Route::name('Save_app_config')->post('Save_app_config', [App_configController::class, 'UpdateApp_config'])->middleware('auth');

Route::name('edit_app_config')->get('/edit_app_config', [App_configController::class, 'index'])->middleware('auth');

Route::name('principal_banner')->get('/@dmin/principal_banner', [principal_baner_sectionController::class, 'index'])->middleware('auth');

Route::name('testimonials_section')->get('/@dmin/testimonials_section', [testimonials_sectionController::class, 'index'])->middleware('auth');

Route::name('start_traiding')->get('/@dmin/start_traiding', [start_traiding_sectionController::class, 'index'])->middleware('auth');

Route::name('parteners_logo')->get('/@dmin/parteners_logo', [parteners_logo_sectionController::class, 'index'])->middleware('auth');

Route::name('last_news')->get('/@dmin/last_news', [last_news_sectionController::class, 'index'])->middleware('auth');

Route::name('get_ready')->get('/@dmin/get_ready', [get_ready_sectionController::class, 'index'])->middleware('auth');

Route::name('faq')->get('/@dmin/faq', [faq_sectionController::class, 'index'])->middleware('auth');
Route::name('store_faq')->post('/@dmin/store_faq', [faq_sectionController::class, 'store_faq'])->middleware('auth');
Route::name('edit_faq')->get('/@dmin/edit_faq/{id}', [faq_sectionController::class, 'edit_faq'])->middleware('auth');
Route::name('update_faq')->post('/@dmin/update_faq', [faq_sectionController::class, 'update_faq'])->middleware('auth');
Route::name('edit_faq')->get('/@dmin/edit_faq/{id}', [faq_sectionController::class, 'edit_faq'])->middleware('auth');

Route::name('download_app')->get('/@dmin/download_app', [download_app_sectionController::class, 'index'])->middleware('auth');


Route::name('crypto_slide')->get('/@dmin/crypto_slide', [crypto_slide_sectionController::class, 'index'])->middleware('auth');
Route::name('crypto_slide_store')->post('/@dmin/crypto_slide_store', [crypto_slide_sectionController::class, 'crypto_slide_store'])->middleware('auth');
Route::name('crypto_slide_destroy')->get('/@dmin/crypto_slide_destroy/{id}', [crypto_slide_sectionController::class, 'crypto_slide_destroy'])->middleware('auth');


Route::name('buy_and_sell')->get('/@dmin/buy_and_sell', [buy_and_sell_sectionController::class, 'index'])->middleware('auth');

Route::name('amazing_features')->get('/@dmin/amazing_features', [amazing_features_sectionController::class, 'index'])->middleware('auth');

Route::name('additional_services')->get('/@dmin/additional_services', [additiona_service_sectionController::class, 'index'])->middleware('auth');

// update routes
Route::name('update_principal_banner')->post('update_principal_banner', [principal_baner_sectionController::class, 'Update_principal_banner'])->middleware('auth');

Route::name('store_buy_sell')->post('store_buy_sell', [buy_and_sell_sectionController::class, 'store_buy_sell'])->middleware('auth');
