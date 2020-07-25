<?php

use Illuminate\Support\Facades\Route;

//User
Route::get('/index','SiteController@index')->name('site.index');
Route::get('/','SiteController@index');
Route::get('/contact','SiteController@contact');
Route::get('/single','SiteController@single');
Route::get('/category','SiteController@category');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//
Route::post('/feedback','ContactUsController@feedback');
//
//Admin
Route::middleware(['auth','admin'])->group(function (){
    Route::post('/logout','SignOutController@logout')->name('logout');
    Route::get('/admin/dashboard/','Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/admin/news/','Admin\AdminController@news')->name('admin.news');
    Route::get('/admin/category/','Admin\AdminController@category')->name('admin.category');
    Route::get('/admin/message/','Admin\AdminController@message')->name('admin.message');
    Route::post('/image_upload', 'Admin\CKEditorController@upload')->name('upload');
    Route::post('/admin/add_category','Admin\AddController@addcategory')->name('admin.add_category');
});

