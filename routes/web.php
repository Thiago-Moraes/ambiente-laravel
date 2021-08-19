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


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    Cache::store('redis')
    ->put('options:a', json_encode('a'));
    Cache::store('redis')
    ->put('options:table', json_encode(DB::table('opcao')->get()));
});

Route::get('/cache', function(){
    // return Cache::store('redis')->get('options:');
//    return Cache::store('redis')->keys('options:');
    // cache::tags('options:3')->flush();
   return dd(app('redis')->keys('
   
   nxcv₢;/giujbv555555*'));
});