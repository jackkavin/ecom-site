<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Web\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function product()
    {
        $product = Product::get();

        return view('products.index',['product' => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $imageName = date('YmdHis').'.'.$request->product_image->extension();
        Storage::putFileAs('public/images', $request->product_image, $imageName);

        $product = Product::create([
            'product_name' => $data['product_name'],
            'description' => $data['description'],
            'product_image' => $imageName,
        ]);
        return response()->json(['message' =>'success'], 200);
    }

    public function ProductEdit($id)
    {
         $products = Product::where('id',$id)->first();
         return response()->json(['products' => $products]);
    }

    public function productUpdate(ProductRequest $request)
    {
        $data = $request->all();
        $product = Product::where('id',$data['id'])->update([
            'product_name' => $data['product_name'],
            'description' => $data['description'],
        ]);
        return response()->json(['message' =>'success'], 200);
    }

    public function productDelete($id)
    {
        $product = Product::where('id',$id)->delete();           
        return back();

    }

}