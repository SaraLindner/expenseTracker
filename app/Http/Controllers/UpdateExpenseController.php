<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Category;

class UpdateExpenseController extends Controller
{
    public function updateExpense(Expense $expense){
        $categories = Category::all();
        return view('expense.update',compact('expense', 'categories'));
    }

    public function storeExpense(Expense $expense, Request $request ) {
        $expense->update([
            'spend_at' => $request->spend_at,
            'tax_deductable' => $request->filled('tax_deductable'),
            'category_id' => $request->category_id,
            'description' => $request->category_description,
            'amount' => $request->amount,
        ]);

        return redirect('/expense/index');
    }
}
