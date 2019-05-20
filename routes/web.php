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

Route::get('/', function () {
    return view('welcome');
});

//atividade
Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades/{id}/delete', 'AtividadeController@delete');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');

//mensagem
Route::get('/messages', 'MensagemController@index');
Route::get('/messages/create', 'MensagemController@create');
Route::post('/messages', 'MensagemController@store');
Route::get('/messages/{id}', 'MensagemController@show');
Route::get('/messages/{id}/edit', 'MensagemController@edit');
Route::put('/messages/{id}', 'MensagemController@update');
Route::get('/messages/{id}/delete', 'MensagemController@delete');
Route::delete('/messages/{id}', 'MensagemController@destroy');

//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed