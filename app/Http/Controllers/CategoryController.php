<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCat(){
        $categories=Categories::all();
        return view('admin.category.index',compact('categories'));
    }
    public function AddCat(Request $request){
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        // process 1
    // Categories::create([
    //     'category_name'=>$request->category_name,
    //     'user_id'=>Auth::user()->id,
    //     'created_at'=>Carbon::now()
    // ]);

    // process 2 
    // $category=new Categories;
    // $category->category_name=$request->category_name;
    // $category->user_id=Auth::user()->id;
    // $category->save();

    // process 3 
    $data=array();
    $data['category_name']=$request->category_name;
    $data['user_id']=Auth::user()->id;
    $data['created_at']=Carbon::now();
    DB::table('categories')->insert($data);
    return Redirect()->back()->with('success',"category inserted successfully.");
    }
}
