<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Recipes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index()
    {
        $expenses = Expense::sum('value');
        $recipes = Recipes::sum('value');
        $savings = (float)$recipes - (float)$expenses;
        return view('index', [
            'expenses' => $expenses,
            'recipes' => $recipes,
            'savings' => $savings
        ]);
    }
}
