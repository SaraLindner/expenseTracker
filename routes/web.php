<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UpdateExpenseController;
use App\Http\Controllers\DeleteExpenseController;
use App\Http\Controllers\UpdateCategoryController;
use App\Http\Controllers\DeleteCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('start');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/expense', [ExpenseController::class,'createExpenses']);
Route::post('/expense', [ExpenseController::class,'storeExpenses']);

Route::get('/category', [CategoryController::class,'createCategories']);
Route::post('/category', [CategoryController::class,'storeCategories']);

Route::get('/category/index', [CategoryController::class,'indexCategories']);

Route::get('/expense/index', [ExpenseController::class,'indexExpenses']);

Route::get('/expense/{expense}/update/', [UpdateExpenseController::class, 'updateExpense']);
Route::post('/expense/{expense}/update', [UpdateExpenseController::class, 'storeExpense']);

Route::get('/expense/{expense}/delete', [DeleteExpenseController::class, 'updateExpense']);
Route::post('/expense/{expense}/delete', [DeleteExpenseController::class, 'deleteExpense']);

Route::get('/category/{category}/update', [UpdateCategoryController::class, 'updateCategory']);
Route::post('/category/{category}/update', [UpdateCategoryController::class, 'storeCategory']);

Route::get('/category/{category}/delete', [DeleteCategoryController::class, 'updateCategory']);
Route::post('/category/{category}/delete', [DeleteCategoryController::class, 'deleteCategory']);


// route::get(URL, Controller, function)



// Route::get('blade', function () {
//     return view('dashboard');
// });