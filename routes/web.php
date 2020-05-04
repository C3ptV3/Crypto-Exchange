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

Auth::routes(['verify' => true]);
Route::get('/mail-config',  function() {
    return config('mail');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/settings','AccountController@settings')->name('settings')->middleware('auth');
Route::post('/settings/edit','AccountController@edit')->name('edit')->middleware('auth');
Route::get('/info','AccountController@info')->name('info')->middleware('auth');

Route::get('/deposit','DepositController@deposit')->middleware('auth');
Route::post('/deposit/cash','DepositController@cash')->middleware('auth');
Route::get('/deposit/btc','DepositController@btc')->middleware('auth');
Route::get('/deposit/eth','DepositController@eth')->middleware('auth');

Route::get('/withdraw','WithdrawController@withdraw')->middleware('auth');
Route::get('/withdraw/cash','WithdrawController@cash')->middleware('auth');
Route::get('/withdraw/btc','WithdrawController@btc')->middleware('auth');
Route::get('/withdraw/eth','WithdrawController@eth')->middleware('auth');

Route::get('/about','AboutController@description');
Route::get('/legal','AboutController@legal');
Route::get('/contact','AboutController@contact');

Route::get('/buybtc','BuyController@btc')->middleware('auth');
Route::get('/buyeth','BuyController@eth')->middleware('auth');

Route::get('/transactions','BuyController@transaction')->middleware('auth')->name('trade');
Route::get('/transactionserror','BuyController@transactionerror')->middleware('auth')->name('error');
Route::get('/transactionsucces','BuyController@transactionsucces')->middleware('auth')->name('success');
Route::get('/transactions/{id}','BuyController@transactionid')->middleware('auth');
Route::get('/trade/new','BuyController@transactioncreate')->middleware('auth');
Route::post('/trade/newtrade','BuyController@transactioncreateid')->middleware('auth');

Route::get('/bitcoin','InfoController@btc');
Route::get('/ethereum','InfoController@eth');

Route::get('/redirect','RedirectController@index');


Route::get('/test', 'TestController@index');