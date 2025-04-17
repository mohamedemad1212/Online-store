<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\ProductData;

// الصفحة الرئيسية والصفحات الثابتة
Route::view('/', 'welcome');
Route::view('/about', 'about-us');
Route::view('/sign', 'sign-up');

// مجموعة مسارات المنتجات
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index'); 
    Route::get('/create', [ProductController::class, 'create'])->name('products.create'); 
    Route::post('/', [ProductController::class, 'store'])->name('products.store'); 

    Route::get('/{id}', function ($id) {
        $product = ProductData::findOrFail($id);
        return view('productShow.product', ['product' => $product]);
    })->name('products.show');

    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); 
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update'); 
    Route::delete('/{id}', function ($id) {
        $product = ProductData::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    })->name('products.destroy');
});


Route::get('/product/create', function () {
    return view('productShow.create');
});
