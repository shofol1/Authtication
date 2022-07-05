<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
class BrandController extends Controller
{
   public function allBrand(){
    $brands=brands::latest()->paginate(5);
return view('admin.brand.index',compact('brands'));
   }


   public function AddBrand(Request $request){
    $validated = $request->validate([
        'brand_name' => 'required|unique:brands|min:4',
        'brand_image'=>'required|mimes:png,jpg,jpeg'
    ],
[
   'brand_name.requied'=>'There is an empty field.',
   'brand_name.min'=>'please enter more than 4 charecter.',
   'brand_image.mimes'=>'Please enter png/jpg/jpeg file only.',
]
);
$brand_image=$request->file('brand_image');
// $name_gen=hexdec(uniqid());
// $img_ext=strtolower($brand_image->getClientOriginalExtension());
// $img_name=$name_gen.'.'.$img_ext;
// $up_location='images/brand/';
// $last_image=$up_location.$img_name;
// $brand_image->move($up_location,$img_name);
$name_gen=hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();

Image::make($brand_image)->resize(300, 200)->save('images/brand/'.$name_gen);
$last_image='imges/brand/'.$name_gen;
brands::insert([
    'brand_name'=>$request->brand_name,
    'brand_image'=>$last_image,
    'created_at'=>Carbon::now()
]);

return Redirect()->back()->with('success',"Brands inserted successfully.");
   }

public function editBrand($id){
    $brands=brands::find($id);
    return view('admin.brand.brandEdit',compact('brands'));
}
public function updateBrand(Request $request,$id){
    $validated = $request->validate([
        'brand_name' => 'required|min:4',
    ],
[
   'brand_name.requied'=>'There is an empty field.',
   'brand_name.min'=>'please enter more than 4 charecter.',

]
);
$old_image=$request->old_image;
$brand_image=$request->file('brand_image');

if($brand_image){
    $name_gen=hexdec(uniqid());
$img_ext=strtolower($brand_image->getClientOriginalExtension());
$img_name=$name_gen.'.'.$img_ext;
$up_location='images/brand/';
$last_image=$up_location.$img_name;
$brand_image->move($up_location,$img_name);
    unlink($old_image);
    brands::find($id)->update([
        'brand_name'=>$request->brand_name,
        'brand_image'=>$last_image,
        'created_at'=>Carbon::now()
    ]);
    return Redirect()->route('all.brand')->with('success',"Brands Updated successfully.");
}else{
    brands::find($id)->update([
        'brand_name'=>$request->brand_name,
        'created_at'=>Carbon::now()
    ]);
    return Redirect()->route('all.brand')->with('success',"Brands Updated successfully.");
}


}
public function deleteBrand($id){
    $image=brands::find($id);
    $old_image=$image->brand_image;
    unlink($old_image);
    brands::find($id)->delete();
    return Redirect()->route('all.brand')->with('success',"Brands dek successfully.");
}

}