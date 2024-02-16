<?php

use App\Http\Controllers\AdminController;
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
Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/login', [AdminController::class, 'submit_login']);
Route::get('admin/logout', [AdminController::class, 'logout']);
// Di dalam file web.php atau routes/web.php

// Route::post('/login', 'AdminController@submitLogin')->name('admin.submitLogin');
