<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Category;


class ExpenseController extends Controller
{
    public function indexExpenses(Request $request){

        $expenses = Expense::all();

        return view('expense.index',compact('expenses'));
    }

    public function createExpenses() {

        $categories = Category::all();
        return view('expense.create',compact('categories'));
    }

    public function storeExpenses(Request $request) {

        dump($request->spend_at);
        dump($request->tax_deductable);
        dump($request->category_id);
        dump($request->category_description);
        dump($request->amount);

        $expense = Expense::create([
            'spend_at' => $request->spend_at,
            'tax_deductable' => $request->filled('tax_deductable'),
            'category_id' => $request->category_id,
            'description' => $request->category_description,
            'amount' => $request->amount,
            
        ]);
        dump($expense);

        
        return view('expense.addNewExpense',compact('expense'));
    }

}
