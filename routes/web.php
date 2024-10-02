<?php

use App\Http\Controllers\c_admin;
use App\Http\Controllers\c_page;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [c_page::class, 'home_client'])->name('home_client');
Route::get('/e', [c_page::class, 'test']);

Route::get('/detail/{slug}', [c_page::class, 'detail_client'])->name('detail');

Route::get('/admin', [c_admin::class, 'tintuc_admin']);

Route::get('/filter', [c_page::class, 'filter_news'])->name('filter');
