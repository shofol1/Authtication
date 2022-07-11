<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
class HomeController extends Controller
{
    public function slider(){
        $sliders=DB::table('sliders')->get();
        return view('admin.home.index',compact('sliders'));
    }
    public function editslider(){
return view('admin.home.addSlider');
    }

    
    public function AddSlider(Request $request){
        $validated = $request->validate([
            'title' => 'required|unique:sliders|min:4',
            'description' => 'required',
            'image'=>'required|mimes:png,jpg,jpeg'
        ]
    );

$image=$request->file('image');
$name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(1920,1024)->save('images/sliders/'.$name_gen);
$last_image='images/sliders/'.$name_gen;
slider::insert(
[
    'title'=>$request->title,
    'description'=>$request->description,
    'image'=>$last_image,
    'created_at'=>Carbon::now()
]
);
return Redirect()->route('home.slider')->with('success','Slider added successfully');
    }

    
}
