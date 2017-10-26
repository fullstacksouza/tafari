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

Route::get('/','HomeController@index');
Route::get('sobre','HomeController@about');
Route::get('galeria','HomeController@gallery');
Route::get('downloads','HomeController@downloads');
Route::get('agenda','HomeController@appbook');
Route::get('contato','HomeController@contact');


Route::post('inscricao','NewlestterController@subscriber');
Route::get('newlestter','NewlestterController@sendNewlestter');
Route::get('unsubscriber','NewlestterController@unsubscriberForm');
Route::post('unsubscriber','NewlestterController@unsubscriber');


//PAINEL
Auth::Routes(); //Arquivo Router do framework foi alterado
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/','Painel\PainelController@index');
Route::get('/get','Painel\PainelController@countSubscribers');//contador de inscritos e de views Youtube
Route::post('youtube/upload','Painel\YoutubeController@upload');//upload de video para o youtube
//Calendario
Route::get('agenda', 'Painel\EventController@index');//calendario
Route::post('evento/adicionar', 'Painel\EventController@addEvent');//adicionar um evento 
Route::post('evento/{id}/deletar', 'Painel\EventController@deleteEvent');//remover um evento
Route::post('evento/{id}/atualizar', 'Painel\EventController@updateEvent');//atualizar evento
//Loja - Pedidos
Route::get('loja/pedidos','Painel\WoocommerceController@getOrders');
Route::get('loja/pedidos/{id}/detalhes','Painel\WoocommerceController@getOrderDetail');
//Loja-Produtos
Route::get('loja/produtos','Painel\WoocommerceController@getProducts');
		
	});





