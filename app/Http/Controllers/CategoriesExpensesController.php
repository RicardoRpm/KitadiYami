<?php

namespace App\Http\Controllers;

use App\Models\CategoriesExpenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesExpensesController extends Controller
{
    public function index()
    {
        $categories = CategoriesExpenses::all()->where('user_id', Auth::user()->id);
        return view('categories.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $category = new CategoriesExpenses();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->color = $request->color;
        $category->user_id =  Auth::user()->id;

        $category->save();

        return redirect()->route('categories')->with('successs_msg', 'Categoria criado com sucesso');
    }
}
