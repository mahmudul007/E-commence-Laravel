<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Models\Category;

class CategoryController extends Controller
{
    public function create_view()
    {
        $categories  = Category::get()->all();
        return view('admin.category.create',compact('categories'));
    }

    public function create(Request $request)
    {
        $request->validate([

            'category_name'=>'required'

        ]);
        
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->parent_id= $request->parent_id;
        $category->save();
        Session::flash('success', 'successfully added into database');
        return redirect()->back();
    }

    public function all (){


    }
}
