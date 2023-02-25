<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TodolistController@index')->name('index');
Route::post('/', 'App\Http\Controllers\TodolistController@store')->name('store');
Route::get('delete-task/{id}', 'App\Http\Controllers\TodolistController@deleteTask')->name('deleteTask');