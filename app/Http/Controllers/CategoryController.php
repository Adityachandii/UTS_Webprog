<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Coffee;

class CategoryController extends Controller
{
    // public function subCategory($id){
    //     $allcategory = Category::all();
    //     $category = Category::all()->find($id);
    //     return view('profile.item', compact('category', ('allcategory')));
    // }

    // public function subCategory($id){
    //     $allcategory = Category::all();
    //     $category = Category::all()->find($id);
    //     return view('profile.item', compact('category', ('allcategory')));
    // }

    public function subCategory($id){
        $category = Category::all();
        $subcategory = Category::all()->find($id);
        return view('profile.item', compact('category', 'subcategory'));
    }
}
