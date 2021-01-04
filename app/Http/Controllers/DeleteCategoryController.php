<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DeleteCategoryController extends Controller
{
    public function updateCategory(Category $category) {
        return view('category.delete',compact('category'));
    }

    public function deleteCategory(Category $category, Request $request){

        $category->delete();

        return redirect('/category/index');
    }
}
