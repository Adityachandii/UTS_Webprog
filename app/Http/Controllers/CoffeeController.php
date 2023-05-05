<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Category;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    // public function index (){
    //     return  view('partial.header');
    // }

    // public function index(){
    //     $coffee_name = DB::table('coffees')->get();
    //     return view('profile.profile', ['coffee_name'=> $coffee]);
    // }

    // public function showallcoffee (){
    //     $kopi = Coffee::all();
    //     return view('profile.profile',compact('kopi'));
    // }

    public function detail($id){
        $showcoffee = Coffee::all();
        // $category = Category::all();
        return view('profile.item', compact('showcoffee', 'category'));
    }
}
