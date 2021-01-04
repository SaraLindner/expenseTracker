<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expense;


class DeleteExpenseController extends Controller
{
    public function updateExpense(Expense $expense){

        $categories = Category::all();
        return view('expense.delete',compact('expense', 'categories'));
    }

    public function deleteExpense(Expense $expense, Request $request){
       
        $expense->delete();
        return redirect('/expense/index');
    }
}
