<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function add_category(){
        return view('category.addCategory');
    }
    public function store_category(Request $request){
        $category=new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->save();
        return back()->with('message','category added successfully');
        
    }
    public function manage_category(){
        $category= Category::all();
        return view('category.manageCategory',['categories'=>$category]);
    }
    public function edit_category($id){
        $category= Category::where('id',$id)->first();
        return view('category.editCategory',['categories'=>$category]);
    }
    public function update_category(Request $request){
        $category= Category::find($request->categoryId);
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->save();
        return back()->with('message','category updated successfully');
        
    }
    public function delete_category($id){
        $category= Category::where('id',$id);
        $category->delete();
        return back()->with('message','category deleted successfully');
    }
}
