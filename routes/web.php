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
Route::name('testimonials_store')->post('/@dmin/testimonials_store', [testimonials_sectionController::class, 'testimonials_store'])->middleware('auth');
Route::name('edit_testimonials')->get('/@dmin/edit_testimonials/{id}', [testimonials_sectionController::class, 'edit_testimonials'])->middleware('auth');
Route::name('update_testimonials')->post('/@dmin/update_testimonials', [testimonials_sectionController::class, 'update_testimonials'])->middleware('auth');
Route::name('testimonials_destroy')->get('/@dmin/testimonials_destroy/{id}', [testimonials_sectionController::class, 'testimonials_destroy'])->middleware('auth');


Route::name('start_traiding')->get('/@dmin/start_traiding', [start_traiding_sectionController::class, 'index'])->middleware('auth');
Route::name('start_traiding_store')->post('start_traiding_store', [start_traiding_sectionController::class, 'start_traiding_store'])->middleware('auth');
Route::name('edit_start_traiding')->get('/@dmin/edit_start_traiding/{id}', [start_traiding_sectionController::class, 'edit_start_traiding'])->middleware('auth');
Route::name('update_start_traiding')->post('/@dmin/update_start_traiding', [start_traiding_sectionController::class, 'update_start_traiding'])->middleware('auth');
Route::name('start_traiding_destroy')->get('/@dmin/start_traiding_destroy/{id}', [start_traiding_sectionController::class, 'start_traiding_destroy'])->middleware('auth');


Route::name('parteners_logo')->get('/@dmin/parteners_logo', [parteners_logo_sectionController::class, 'index'])->middleware('auth');
Route::name('parteners_logo_store')->post('/@dmin/parteners_logo_store', [parteners_logo_sectionController::class, 'parteners_logo_store'])->middleware('auth');
Route::name('edit_parteners_logo')->get('/@dmin/edit_parteners_logo/{id}', [parteners_logo_sectionController::class, 'edit_parteners_logo'])->middleware('auth');
Route::name('update_parteners_logo')->post('/@dmin/update_parteners_logo', [parteners_logo_sectionController::class, 'update_parteners_logo'])->middleware('auth');
Route::name('parteners_logo_destroy')->get('/@dmin/parteners_logo_destroy/{id}', [parteners_logo_sectionController::class, 'parteners_logo_destroy'])->middleware('auth');


Route::name('last_news')->get('/@dmin/last_news', [last_news_sectionController::class, 'index'])->middleware('auth');

Route::name('get_ready')->get('/@dmin/get_ready', [get_ready_sectionController::class, 'index'])->middleware('auth');

Route::name('faq')->get('/@dmin/faq', [faq_sectionController::class, 'index'])->middleware('auth');
Route::name('store_faq')->post('/@dmin/store_faq', [faq_sectionController::class, 'store_faq'])->middleware('auth');
Route::name('edit_faq')->get('/@dmin/edit_faq/{id}', [faq_sectionController::class, 'edit_faq'])->middleware('auth');
Route::name('update_faq')->post('/@dmin/update_faq', [faq_sectionController::class, 'update_faq'])->middleware('auth');
Route::name('destroy_faq')->get('/@dmin/destroy_faq/{id}', [faq_sectionController::class, 'destroy_faq'])->middleware('auth');

Route::name('download_app')->get('/@dmin/download_app', [download_app_sectionController::class, 'index'])->middleware('auth');
Route::name('edit_download_section')->get('/@dmin/edit_download_section/{id}', [download_app_sectionController::class, 'edit_download_section'])->middleware('auth');
Route::name('update_download_app')->post('/@dmin/update_download_app', [download_app_sectionController::class, 'update_download_app'])->middleware('auth');


Route::name('crypto_slide')->get('/@dmin/crypto_slide', [crypto_slide_sectionController::class, 'index'])->middleware('auth');
Route::name('crypto_slide_store')->post('/@dmin/crypto_slide_store', [crypto_slide_sectionController::class, 'crypto_slide_store'])->middleware('auth');
Route::name('edit_crypto_slide')->get('/@dmin/edit_crypto_slide/{id}', [crypto_slide_sectionController::class, 'edit_crypto_slide'])->middleware('auth');
Route::name('update_crypto_slide')->post('/@dmin/update_crypto_slide', [crypto_slide_sectionController::class, 'update_crypto_slide'])->middleware('auth');
Route::name('crypto_slide_destroy')->get('/@dmin/crypto_slide_destroy/{id}', [crypto_slide_sectionController::class, 'crypto_slide_destroy'])->middleware('auth');


Route::name('buy_and_sell')->get('/@dmin/buy_and_sell', [buy_and_sell_sectionController::class, 'index'])->middleware('auth');
Route::name('store_buy_sell')->post('store_buy_sell', [buy_and_sell_sectionController::class, 'store_buy_sell'])->middleware('auth');
Route::name('edit_buy_sell')->get('/@dmin/edit_buy_sell/{id}', [buy_and_sell_sectionController::class, 'edit_buy_sell'])->middleware('auth');
Route::name('update_buy_sell')->post('/@dmin/update_buy_sell', [buy_and_sell_sectionController::class, 'update_buy_sell'])->middleware('auth');
Route::name('buy_sell_destroy')->get('/@dmin/buy_sell_destroy/{id}', [buy_and_sell_sectionController::class, 'buy_sell_destroy'])->middleware('auth');


Route::name('amazing_features')->get('/@dmin/amazing_features', [amazing_features_sectionController::class, 'index'])->middleware('auth');
Route::name('edit_amazing_features')->get('/@dmin/edit_amazing_features/{id}', [amazing_features_sectionController::class, 'edit_amazing_features'])->middleware('auth');
Route::name('update_amazing_features')->post('/@dmin/update_amazing_features', [amazing_features_sectionController::class, 'update_amazing_features'])->middleware('auth');


Route::name('additional_services')->get('/@dmin/additional_services', [additiona_service_sectionController::class, 'index'])->middleware('auth');
Route::name('additional_service_store')->post('additional_service_store', [additiona_service_sectionController::class, 'additional_service_store'])->middleware('auth');
Route::name('edit_additional_service')->get('/@dmin/edit_additional_service/{id}', [additiona_service_sectionController::class, 'edit_additional_service'])->middleware('auth');
Route::name('update_additional_service')->post('/@dmin/update_additional_service', [additiona_service_sectionController::class, 'update_additional_service'])->middleware('auth');
Route::name('additional_service_destroy')->get('/@dmin/additional_service_destroy/{id}', [additiona_service_sectionController::class, 'additional_service_destroy'])->middleware('auth');


// update routes
Route::name('update_principal_banner')->post('update_principal_banner', [principal_baner_sectionController::class, 'Update_principal_banner'])->middleware('auth');


