<?php

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
/*
Route::get('/', function () {
    //return view('welcome');
    return 'hello world';
});
*/
Route::get('/a', function() {
    return view('test');
});

Route::get('/', 'ArticleController@index');
Route::get('article/{article}', 'ArticleController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 後台
Route::prefix('admin')->middleware('auth')->group(function (){
// middleware -> 需經過認證

    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/create', 'Admin\ArticleController@create');
    Route::post('article', 'Admin\ArticleController@store');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete'); //name 別名

});
