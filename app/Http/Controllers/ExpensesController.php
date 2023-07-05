<?php

namespace App\Http\Controllers;

use App\Models\CategoriesExpenses;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpensesController extends Controller
{
    protected function index(Request $request)
    {
        $expenses = Expense::all()->where('user_id', Auth::user()->id);
        return view('expenses.index', [
            'expenses' => $expenses
        ]);
    }

    protected function create()
    {
        $CategoryExpenses = CategoriesExpenses::all()->where('user_id', Auth::user()->id);
        return view('expenses.create', [
            'CategoryExpenses' => $CategoryExpenses
        ]);
    }

    protected function store(Request $request)
    {
        $expense = new Expense();
        $expense->value = $request->value;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->description = $request->description;
        $expense->user_id = Auth::user()->id;

        $expense->save();

        return redirect()->route('expenses.create')->with('successs_msg', 'Receita registada com sucesso');
    }

    protected function storeModal(Request $request)
    {
        $expense = new Expense();
        $expense->value = $request->value;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->user_id = Auth::user()->id;

        $expense->save();

        return redirect()->back()->with('successs_msg', 'Receita registada com sucesso');
    }
}
