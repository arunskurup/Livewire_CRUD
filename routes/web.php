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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/Update/{id}',\App\Http\Livewire\UserUpdate::class)->name('update');
Route::get('/Create',\App\Http\Livewire\UserCreate::class)->name('create');
Route::get('/List',\App\Http\Livewire\UserList::class)->name('list');
Route::get('/',\App\Http\Livewire\UserList::class)->name('list');
Route::get('/dashboard',\App\Http\Livewire\UserList::class)->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
