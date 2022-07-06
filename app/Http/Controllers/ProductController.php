<?php

namespace App\Http\Controllers;

use App\Models\products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allPro(){
        $products=products::latest()->paginate(5);
        $trashPro=products::onlyTrashed()->latest()->paginate((3));
        return view('admin.product.product',compact('products','trashPro'));
    }
    public function addPro(Request $request){
        $validated = $request->validate([
            'product_name' => 'required|unique:products|max:255',
        ],
        [
            'product_name.required' => 'There is an empty field!',
        ]
    );

    $data=array();
    $data['product_name']=$request->product_name;
    $data['user_id']=Auth::user()->id;
    $data['created_at']=Carbon::now();
    DB::table('products')->insert($data);
    return Redirect()->back()->with('success','Product added successfully.');
    }

    public function  editPro($id){
$products=products::find($id);
return view('admin.product.productEdit',compact(('products')));
    }

    public function updatePro(Request $request,$id){
        $updateId=products::find($id)->update([
            'product_name'=>$request->product_name,
            'user_id'=>Auth::user()->id
        ]);
        return Redirect()->route('all.product')->with('success',"Product updated successfully");
    }

    public function softdeletePro($id){
        $deleteId=products::withTrashed()->find($id)->delete();
        return Redirect()->back()->with('success','Product soft delete succesfull.');
    }
    public function restorePro($id){
        $restoreId=products::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Product restored succesfully.');
    }
    public function permanentDelete($id){
        $pDeleteId=products::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','Product permanently deleted.');
    }
}
