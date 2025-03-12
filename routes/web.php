<?php

use Illuminate\Support\Facades\Route;

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
    $products = product ::all();
    
    return view("products", ["products" => $products]);
});

Route::get("/products/{id}" ,function($id){
    $products = product::all();
    $product_data =[];
    foreach($products as $product){
        if($product["id"]==$id){
            $product_data[] = $product;
        }
    }
    return view ("product", ["product"=>$product_data[0]]);
});