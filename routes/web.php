<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin/user', 'admin.user.index')->name('admin.user.index');
Route::view('admin/category/index', 'admin.category.index')->name('admin.category.index');
Route::view('admin/item/index', 'admin.item.index')->name('admin.item.index');