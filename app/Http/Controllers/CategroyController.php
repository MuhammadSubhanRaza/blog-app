<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategroyController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index')->with('categories',$categories);
    }

    public function create(Request $request)
    {
        $category = new Category();
        $category->title = $request['title'];
        $category->description = $request['description'];

        if($category->save()>0){
            return redirect(Route('category'));
        }

    }
}
