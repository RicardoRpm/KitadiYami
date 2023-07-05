<?php

namespace App\Http\Controllers;

use App\Models\CategoriesRecipies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesRecipiesController extends Controller
{
    public function index()
    {
        $categories = CategoriesRecipies::all()->where('user_id', Auth::user()->id);
        return view('categoriesRecipies.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $category = new CategoriesRecipies();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->color = $request->color;
        $category->user_id =  Auth::user()->id;

        $category->save();

        return redirect()->route('categoriesRecipies')->with('successs_msg', 'Categoria criado com sucesso');
    }
}
