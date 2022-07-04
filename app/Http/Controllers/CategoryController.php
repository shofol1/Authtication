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
        $categories=Categories::latest()->paginate(5);
        $trashCat=Categories::onlyTrashed()->latest()->paginate(3);
        return view('admin.category.index',compact('categories','trashCat'));
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

    public function editCat($id){
        $categories=Categories::find($id);
        return view('admin.category.categoryEdit',compact('categories'));
    }
    public function updateCat(Request $request,$id){
        $updateId=Categories::find($id)->update([
            'category_name'=>$request->category_name,
            'user_id'=>Auth::user()->id,
        ]);

    return Redirect()->route('all.category')->with('success',"category updated successfully.");

    }
    public function SoftDeleteCat($id){
        $deleteId=Categories::find($id)->delete();
        return Redirect()->back()->with('success','Category Soft Delete successfull');
    }
    public function restoreCat($id){
        $restoreId=Categories::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Category restore successfull');

    }
    public function permanentDelete($id){
        $restoreId=Categories::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Permanantly delete successfully');

    }
}
