<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Category;

class CategoryController extends Controller
{
    public function create_view()
    {
        return view('admin.category.create');
    }

    public function create(Request $request)
    {
        $category = new Catergory();
        $category->category_name = $request->category_name;
        $category->parent_id= $request->parent_id;
        $category->save();
    }
}
