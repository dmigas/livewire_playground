<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Products;
use App\Http\Controllers\ProductController;

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

Route::get('/', Products::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('products', ProductController::class)->names([
    'create' => 'products.create',
    'store'  => 'products.store'
]);
