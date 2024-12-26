<?php

use App\Http\Controllers\c_admin;
use App\Http\Controllers\c_page;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [c_page::class, 'home_client'])->name('home_client');
// Route::get('/e', [c_page::class, 'test']);
Route::get('/detail/{slug}', [c_page::class, 'detail_client'])->name('detail');
// Route::get('/admin', [c_admin::class, 'tintuc_admin']);
Route::get('/filter', [c_page::class, 'filter_news'])->name('filter');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::get('list_category', [c_admin::class, 'list_category'])->name('admin.list_category');
    Route::get('formadd_category', [c_admin::class, 'formadd_category'])->name('admin.formadd_category');
    Route::post('add_category', [c_admin::class, 'add_category'])->name('admin.add_category');
    Route::get('formedit_category/{id}', [c_admin::class, 'formedit_category'])->name('admin.formedit_category');
    Route::post('edit_category', [c_admin::class, 'edit_category'])->name('admin.edit_category');
    Route::delete('del_category/{id}', [c_admin::class, 'del_category'])->name('admin.del_category');


    Route::get('list_news', [c_admin::class, 'list_news'])->name('admin.list_news');
    Route::get('formadd_news', [c_admin::class, 'formadd_news'])->name('admin.formadd_news');
    Route::post('add_news', [c_admin::class, 'add_news'])->name('admin.add_news');
    Route::get('formedit_news/{id}', [c_admin::class, 'formedit_news'])->name('admin.formedit_news');
    Route::post('edit_news', [c_admin::class, 'edit_news'])->name('admin.edit_news');
    Route::delete('del_news/{id}', [c_admin::class, 'del_news'])->name('admin.del_news');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
