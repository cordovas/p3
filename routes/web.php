<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
||
*/

Route::get('/', 'LotteryTicketController@index');
Route::get('/search-process', 'LotteryTicketController@searchProcess');
