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
    public function allPro(){
        $products=products::latest()->paginate(5);
        return view('admin.product.product',compact('products'));
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
}
