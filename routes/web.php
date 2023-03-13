<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PageController::class)->group(
    function () {
        Route::get('/eccomerce', 'pageEcommerce')->name('ecommerce');
        Route::get('/cotizador-envios', 'pageShippingQuoter')->name('shipping_quoter');
        Route::get('/venta-materia-embalaje', 'pageSalesPackagingMaterial')->name('sales_packaging_material');
}
)->middleware(['auth', 'verified'])->name('page');

require __DIR__.'/auth.php';
