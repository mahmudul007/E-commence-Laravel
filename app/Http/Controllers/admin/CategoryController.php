<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Barryvdh\Debugbar\Facade as DebugBar;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create_view()
    {
        // $cp = University::search('private','buisness',null);

        // $cp = University::find(1)->faculties;

        // $stars =University::find(1)->stars;
        // foreach ($cp as $value) {
        //     DebugBar::addMessage($value->faculty->dept_name.'jjj');
        // }
        // $star=University::find(1)->campusStars;
        // foreach ($star as $value) {
        //     DebugBar::addMessage($value->star_name);
        // }

        $categories = Category::get()->all();
        return view('admin.category.create', compact('categories'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->parent_id = $request->parent_id;
        $category->save();
        Session::flash('success', 'successfully added into database');
        return redirect()->back();
    }
    // with('children')->root()
    public function all()
    {
        $categories = Category::tree()->get()->toTree();
       
        return view('admin.category.all',compact('categories'));
    }
}
