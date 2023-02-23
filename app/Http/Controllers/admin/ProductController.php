<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Image;

class ProductController extends Controller
{
    public function create_view()
    {
        return view('admin.product.add');
    }
    //    'name',
    //    'sku',
    //    'price',
    //    'weight',
    //    'brand_id',
    //    'catagory_id',
    //    'description',
    //    'quantity',
    //    'product_live',
    //    'unlimited_stock',
    //    'colors',
    //    'size',
    public function create(Request $request)
    {
        $request->validate([
            'link' => 'image|required',
            'name' => 'required',
            'sku' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'colors' => 'required',
            'size' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->brand_id = $request->brand_id;
        $product->catagory_id = $request->catagory_id;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->product_live = $request->product_live;
        $product->unlimited_stock = $request->unlimited_stock;
        $product->colors = $request->colors;
        $product->size = $request->size;

        if ($request->hasfile('link')) {
            foreach ($request->file('link') as $file) {
                $file = $request->file('link');
                $filename = time() . $file->getClientOriginalName();
                $file->move('img/products/', $filename);
                $var->link = '/img/products/' . $filename;

                $var = new Image();
                $var->tag = 'product';
                $var->table = 'products';
                $var->ref_id = $product->id;
                $var->save();
            }
        }
        $product->save();

        return rediect()->back();
    }
}
