<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class CategroyController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
        
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index')->with('categories',$categories);
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        if(Gate::denies('isAdmin',$user))
        {
            abort(403);
        }

        $category = new Category();
        $category->title = $request['title'];
        $category->description = $request['description'];

        if($category->save()>0){
            return redirect(Route('category'));
        }

    }
}
