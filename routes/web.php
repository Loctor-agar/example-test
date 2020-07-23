<?php


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Crud for contacts
Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/update', 'ContactController@updateOneMessage')->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::post('/contact', 'ContactController@store');

//Crud for articles



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
