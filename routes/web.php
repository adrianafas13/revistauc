<?php

use Illuminate\Support\facades\Mail;

Route::get('/', 'GeneralController@index')->name('welcome');
Route::get('/articulos', 'GeneralController@arti')->name('articulos');
Route::get('/seccion/{seccion}', 'ArticlesController@seccion');
Route::get('/art/{slug}', 'GeneralController@show')->name('art');
Route::post('/art/{article}', 'GeneralController@store')->name('art.store');
Route::get('/contacto', 'GeneralController@contacto')->name('contacto');
//ruta de edicion tentativa
Route::get('/edicion', 'GeneralController@edicion')->name('edicion');

Route::get('/autores', 'GeneralController@authors')->name('autores');
Route::get('/sobrenosotros', 'GeneralController@sobre')->name('sobrenosotros');
Route::get('/lang/{locale}','GeneralController@setlocale');
Route::get('search','GeneralController@search')->name('search');

Auth::routes(['verify' => true]);

Route::middleware(['auth'])->group(function(){
	Route::post('/comment/{article_id}','CommentsController@store');
	Route::resource('/comment', 'CommentsController', ['only'=> ['store']]);
});

Route::middleware(['auth','auth.admin'])->prefix('admin')->group(function(){
	Route::get('/', 'AdminController@admin')->name('admin');
	Route::get('/comments', 'CommentsController@index')->name('comments');
	Route::get('/comment/{comment}/approved', 'CommentsController@approved')->name('comments.approved');
	Route::resource('/comment', 'CommentsController', ['except'=> ['index','store']]);
	Route::resource('/user', 'AdminUserController', ['except'=> ['show', 'create', 'store']] );
	Route::resource('about', 'AboutsController');
	Route::resource('/article', 'ArticlesController');
	Route::resource('/contact', 'ContactsController');
	Route::resource('/cover', 'CoversController');

	Route::resource('/authors', 'AuthorsController');
	Route::resource('/carousel', 'CarouselController');
	Route::resource('/editions', 'EditionsController');
	Route::resource('/information', 'InformationController');
});
