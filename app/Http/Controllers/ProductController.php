<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductData;

class ProductController extends Controller
{
    public function edit($id)
    {
        $product = ProductData::findOrFail($id);
        return view("productShow.edit", compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = ProductData::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'company_id' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->img_path = $imagePath;
        }
    
        $product->update($request->except(['_token', '_method']));
    
        return redirect()->route('products.index', $id)->with('success', 'Product updated successfully!');
    }
    

    public function index()
    {
        $products = ProductData::orderBy('created_at', 'DESC')->paginate(9);
        return view('productShow.products', compact('products'));
    }
    public function create()
    {
        return view('productShow.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'company_id' => 'required|integer',

        ]);

        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); 
            $image->move(public_path('storage/images'), $imageName); 
            $imagePath = 'images/' . $imageName; 
        } else {
            $imagePath = 'storage/images/default.jpg'; 
        }

        ProductData::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "company_id" => $request->company_id,
            "img_path" => $imagePath
        ]);

        return redirect()->route('products.index')->with('success', 'تمت إضافة المنتج بنجاح!');
    }
}
