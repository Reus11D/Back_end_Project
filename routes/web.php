<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UploadController;
use App\Models\Queries;
use App\Models\Item;
use App\Models\ItemDetails;


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
//Locale
Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')->name('locale');
///

Route::get('/', function () {
    return view('index');
});

Route::get('/index-2', function () {
    return view('index-2');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/index_', function () {
  return view('index_');
});

//////---------------Email sending--------------////////////
Route::get('/page/send', function(){
    DB::table('queries')->insert([
      'name' => 'Marco',
      'age' => '19',
      'email' => 'abay_abilkhayir@mail.ru',
      'phone' => '1111',
    ]);
 });
Route::get('/page', function () {
    return view('contact-page');
});
///////--------------------------------------------////////////

//////---------------File Uploading--------------////////////
Route::get('/filepage', function(){
    DB::table('items')->insert([
      'name' => 'Marco',
      'age' => '19',
      'email' => 'abay_abilkhayir@mail.ru',
      'phone' => '1111',
    ]);
 });
 Route::get('/filepage', function(){
    DB::table('item_details')->insert([
      'item_id' => '1',
      'filename' => '7tGFCduUodO6tBlSDbwqqqSZdHtRiNe02yKedbmD',
    ]);
 });


Route::get('/filepage', function () {
    return view('fileupload_page');
});


Route::get('/email', 'App\Http\Controllers\ContactController@create');
Route::post('/email', 'App\Http\Controllers\ContactController@sendEmail')->name('send.email');

Route::get('/fileupload_page', 'App\Http\Controllers\UploadController@uploadForm');
Route::post('/fileupload_page', 'App\Http\Controllers\UploadController@uploadSubmit');
///////--------------------------------------------////////////
