<?php

use App\Http\Controllers\CropController;
use App\Http\Controllers\OptionController;
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
// Route::get('/home', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('home.product');

// category controller
Route::post('/options', [OptionController::class, "chooseOption"])->name('option');

// category routes
Route::get('/options/crops/create', [CropController::class, 'create'])-> name('crop.create');
Route::post('/options/crops/create', [CropController::class, 'store'])-> name('crop.store');
// Route::get('/options/crops', [CropController::class, 'index'])-> name('crop.index');
Route::post('/options/crops/{id}', [CropController::class, 'destroy'])-> name('crop.destroy');
Route::get('/options/crops/{id}/edit', [CropController::class, 'edit'])-> name('crop.edit');
Route::put('/options/crops/{id}/edit', [CropController::class, 'update'])-> name('crop.update');


// crop routes
Route::get('/options/crops/index', [CropController::class, 'index'])->name('crops.index');


// Route::get('/options/crops/index', [CropController::class, 'index'])->name('crops.index');

// animal controller
Route::get('/options/animal/create', [AnimalController::class, 'create'])->name('animal.create');

