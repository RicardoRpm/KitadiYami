<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\HomeController;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
})->name('site');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/registar', function () {
    return view('users.register');
})->name('register');

Route::post('/registar', [UsersController::class, 'register'])->name('register_user');
Route::post('/login', [UsersController::class, 'login'])->name('login_login');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

Route::prefix('despesas')->group(function () {
    Route::Get('/', [ExpensesController::class, 'index'])->name('expenses.index');

    Route::Post('store', [ExpensesController::class, 'store'])->name('expenses.store');
    Route::Post('/', [ExpensesController::class, 'storeModal'])->name('expenses.storeModal');

    //Route::view('/nova', 'expenses.create')->name('expenses.create');
    Route::Get('nova_despesa', [ExpensesController::class, 'create'])->name('expenses.create');
})->middleware('auth');

Route::prefix('receitas')->group(function () {
    Route::Get('/', [RecipesController::class, 'index'])->name('recipes.index');
    Route::Post('/', [RecipesController::class, 'store'])->name('recipes.store');

    Route::view('nova_receita', 'recipes.create')->name('recipes.create');
})->middleware('auth');

Route::prefix('categoria')->group(function () {
    Route::Get('/', [CategoriesController::class, 'index'])->name('categories');
    Route::Post('/', [CategoriesController::class, 'store'])->name('categories.store');

    Route::view('nova_categoria', 'categories.create')->name('categories.create');
})->middleware('auth');
