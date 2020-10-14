<?php

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

Route::get('/', function () {
    return view('auths.lo-gin');
});

Route::get('enkrip','KelolaAkunController@enkripsi');


Route::get('/','AuthController@index')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

// Route::get('email', function () {
//     \Mail::raw('plain text message', function ($message) {
//         $message->to('baidhowi112@gmail.com', 'John Doe');
//         $message->subject('Subject');

//     });
// });

Route::get('/portfolio_details', 'SiteController@portfolio_details');
Route::get('/about', 'SiteController@about');
Route::get('/tugas', 'SiteController@tugas');
Route::get('/struktur', 'SiteController@struktur');
Route::get('/agenda', 'SiteController@agenda');
Route::get('/berita', 'SiteController@berita');
Route::get('/berita1', 'SiteController@berita1');
Route::get('/berita2', 'SiteController@berita2');
Route::get('/berita3', 'SiteController@berita3');
Route::get('/beritanew', 'SiteController@beritanew');
Route::get('/pengumuman', 'SiteController@pengumuman');
Route::get('/dayasos', 'SiteController@dayasos');
Route::get('/linjamsos', 'SiteController@linjamsos');
Route::get('/rehsos', 'SiteController@rehsos');
Route::get('/portfolio', 'SiteController@portfolio');
Route::get('/contact', 'SiteController@contact');

Route::post('/data/create','PengaduanController@create');
Route::get('/dashboard','DashboardController@index');

Route::group(['middleware' => ['auth','chekRole:admin']], function () {
});
Route::group(['middleware' => ['auth','checkRole:tksk']], function () {

    Route::get('/btn_ya/{id}/edit_ya','DataWargaController@edit_ya');
    Route::get('/btn_tidak/{id}/edit_tidak','DataWargaController@edit_tidak');

    Route::get('/pencarian','DataWargaController@index');
    Route::get('/spk','DataWargaController@spk');
    Route::get('/list_data_warga','DataWargaController@index');
    Route::get('/kirim_data','KirimDataController@index');
    Route::post('/import','KirimDataController@ImportData');
    Route::get('export','KirimDataController@ExportData');
    Route::get('/dashboard_v2','DashboardController@dh_tksk');
    Route::get('/kelola_akun','KelolaAkunController@index');
    Route::get('/kelola_akun/{id}/edit','KelolaAkunController@edit');
    Route::post('/kelola_akun/{id}/update','KelolaAkunController@update');
    Route::get('/kelola_akun/{id}/delete','KelolaAkunController@delete');
    Route::post('/kelola_akun/add','KelolaAkunController@create');

    Route::get('/export_data','ExportDataWarga@index');
    Route::post('/import_siswa','KirimDataController@import_siswa');
    Route::post('/import_data_news','KirimDataController@import_data_news');

    Route::get('/data_warga_1','TblDringuController@index');

    Route::post('/import_dringu_1','ImportDataWarga@import_dringu');
    Route::get('/export_dringu','ExportDataWarga@export_dringu');

    Route::post('/import_kedungdalem','ImportDataWarga@import_kedungdalem');
    Route::get('/export_kedungdalem','ExportDataWarga@export_kedungdalem');

    Route::post('/import_kalisalam','ImportDataWarga@import_kalisalam');
    Route::get('/export_kalisalam','ExportDataWarga@export_kalisalam');

    Route::post('/import_kalirejo','ImportDataWarga@import_kalirejo');
    Route::get('/export_kalirejo','ExportDataWarga@export_kalirejo');

    Route::post('/import_mranggon_lawang','ImportDataWarga@import_mranggon_lawang');
    Route::get('/export_mranggon_lawang','ExportDataWarga@export_mranggon_lawang');

    Route::post('/import_ngepoh','ImportDataWarga@import_ngepoh');
    Route::get('/export_ngepoh','ExportDataWarga@export_ngepoh');

    Route::post('/import_pabean','ImportDataWarga@import_pabean');
    Route::get('/export_pabean','ExportDataWarga@export_pabean');

    Route::post('/import_randuputih','ImportDataWarga@import_randuputih');
    Route::get('/export_randuputih','ExportDataWarga@export_randuputih');

    Route::post('/import_sekarsare','ImportDataWarga@import_sekarsare');
    Route::get('/export_sekarsare','ExportDataWarga@export_sekarsare');

    Route::post('/import_sumberagung','ImportDataWarga@import_sumberagung');
    Route::get('/export_sumberagung','ExportDataWarga@export_sumberagung');

    Route::post('/import_sumbersuko','ImportDataWarga@import_sumbersuko');
    Route::get('/export_sumbersuko','ExportDataWarga@export_sumbersuko');

    Route::post('/import_tamansari','ImportDataWarga@import_tamansari');
    Route::get('/export_tamansari','ExportDataWarga@export_tamansari');

    Route::post('/import_tegalrejo','ImportDataWarga@import_tegalrejo');
    Route::get('/export_tegalrejo','ExportDataWarga@export_tegalrejo');

    Route::post('/import_watuwungkuk','ImportDataWarga@import_watuwungkuk');
    Route::get('/export_watuwungkuk','ExportDataWarga@export_watuwungkuk');
    Route::get('/reload_status','ExportDataWarga@reload_status');

});

Route::group(['middleware' => ['auth','checkRole:opdes,admin']], function () {
    Route::get('download','DataWargaController@download_template');
    Route::get('search','TblDringuController@index');
    Route::get('/data_warga','DataWargaController@index');
    Route::get('/data_warga_1','TblDringuController@index');
    Route::get('/dashboard_v3','DashboardController@dh_opdes');

    Route::get('/addwarga','DataWargaController@addWarga');
    Route::post('/add/warga','DataWargaController@create');
    Route::get('/data_warga/{id}','TblDringuController@delete');
    Route::get('/data_warga/{id}/edit','TblDringuController@edit');
    Route::post('/data_warga/{id}/update/dringu','TblDringuController@update');
    Route::post('/import_dringu','ImportDataWarga@import_dringu');
    Route::get('/import_page','TblDringuController@import_dringu_page');
    Route::get('/kirim_data_tksk_dringu','TblDringuController@kirim_data_tksk');



});

Route::group(['middleware' => ['auth','checkRole:koordinator,admin']], function () {
    Route::get('/pengaduan','PengaduanController@index');
    Route::get('/data/{id}/edit','PengaduanController@edit');
    Route::delete('/delete','PengaduanController@delete');
    Route::get('/data/{id}/email','PengaduanController@email');
    Route::post('/mail','MailController@send');
Route::get('/dashboard_v4','DashboardController@dh_koordinator');

});
