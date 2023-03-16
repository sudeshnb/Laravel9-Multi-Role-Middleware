<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\V1\ProductController;
/*use App\Http\Controllers\ProductController;
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

Auth::routes();
// User Route
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/home", [HomeController::class, 'userHome'])->name('home');
});

// Editor Route
Route::middleware(['auth', 'user-role:editor'])->group(function () {
    Route::get("/editor/home", [HomeController::class, 'editorHome'])->name('home.editor');
});

// Admin Route
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');

    Route::get("/admin/product", [ProductController::class, 'index'])->name('admin.product');
    Route::resource('products', ProductController::class);
});
