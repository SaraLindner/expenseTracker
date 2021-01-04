<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UpdateCategoryController extends Controller
{
    public function updateCategory(Category $category) {
        return view('category.update',compact('category'));
    }

    public function storeCategory(Category $category, Request $request) {

        $category->update(['name' => $request->name]);

        return redirect('/category/index');
    }
}
