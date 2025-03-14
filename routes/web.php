<?php

use Illuminate\Support\Facades\Route;

use App\Models\ProductData;
use App\Models\Company;
use App\Models\product;

Route::get('/', function () {
    return view('welcome') ;
});
Route::get('/about', function () {
    return view('about-us');
});

Route::get('/sign', function () {
    return view('sign-up');
});


Route::get("/products", function () {
    $products = ProductData::with("company")->paginate(4);
    return view("products", ["products" => $products
]);
});

Route::get("/products/{id}" ,function($id){
    $product = ProductData::find($id);
    
    return view ("product", ["product"=>$product]);
});