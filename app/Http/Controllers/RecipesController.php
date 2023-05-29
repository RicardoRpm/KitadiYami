<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipesController extends Controller
{
    protected function index(Request $request)
    {
        $recipes = Recipes::all()->where('user_id', Auth::user()->id);
        return view('recipes.index', ['recipes' => $recipes]);
    }

    protected function store(Request $request)
    {
        $recipe = new Recipes();
        $recipe->value = $request->value;
        $recipe->date = $request->date;
        $recipe->description = $request->description;
        $recipe->user_id = Auth::user()->id;

        $recipe->save();

        return redirect()->route('recipes.create')->with('successs_msg', 'Receita registada com sucesso');
    }
}
