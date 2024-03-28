<?php

Route::get('/', 'HomeController@index' )->name('home');
Route::get('/product/{slug}', 'HomeController@single')->name('product.single');

Route::group(['middleware' => ['auth']], function() {

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {

    //    Route::prefix('stores')->name('admin.stores.')->group(function() {
    //
    //        Route::get('/', 'StoreController@index')->name('index');
    //        Route::get('/create', 'StoreController@create')->name('create');
    //        Route::post('/store', 'StoreController@store')->name('store');
    //        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
    //        Route::put('/update/{store}', 'StoreController@update')->name('update');
    //        Route::delete('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    //    });

    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');

    Route::delete('photo/remove/{photoId}', 'ProductPhotoController@removePhoto')->name('photo.remove');

    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
