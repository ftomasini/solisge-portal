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
    return redirect()->route('view', 'painel');
});

Route::get('/view/{id}', function ($id) {
    if (View::exists(env('TEMA').'.'.$id)) {
        return sview($id);
    } else {
        abort(404);
    }
})->name('view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
