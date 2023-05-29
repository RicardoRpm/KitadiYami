<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all()->where('user_id', Auth::user()->id);
        return view('categories.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $category = new Categories();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->user_id =  Auth::user()->id;

        $category->save();

        return redirect()->route('categories')->with('successs_msg', 'Categoria criado com sucesso');
    }
}
