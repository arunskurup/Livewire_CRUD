<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Update/{id}',\App\Http\Livewire\UserUpdate::class)->name('update');
Route::get('/Create',\App\Http\Livewire\UserCreate::class)->name('create');
Route::get('/List',\App\Http\Livewire\UserList::class)->name('list');