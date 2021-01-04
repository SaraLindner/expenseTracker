<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function indexCategories() {   

        $categories = Category::all();

        return view('category.index',compact('categories'));
    }

    public function createCategories() {

        return view('category.create');
    }

    public function storeCategories(Request $request) {

        dump($request->category_name);

        $category = Category::create([
            'id' => $request->category_id,
            'name' => $request->name,

        ]);

        dump($category);

        return view('category.addNewCategory',compact('category'));

    }
}
