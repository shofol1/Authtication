<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
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
    public function createSlider(){
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

    public function editSlider($id){
        $sliders=slider::find($id);
        return view('admin.home.editSlider',compact('sliders'));
    }

    public function updateSlider(Request $request,$id){
        $old_image=$request->old_image;
        $image=$request->file('image');
   if($image){
    $name_gen=hexdec(uniqid()).".".$image->getClientOriginalExtension();
    $image->move('images/sliders/',$name_gen);
    $last_image='images/sliders/'.$name_gen;
    unlink($old_image);
    slider::find($id)->update([
'title'=>$request->title,
'description'=>$request->description,
'image'=>$last_image,
'created_at'=>Carbon::now()
    ]);
    return redirect()->back()->with('success','data updated successfully');
   }else{
    slider::find($id)->update([
        'title'=>$request->title,
        'description'=>$request->description,
        'created_at'=>Carbon::now()
    ]);
    return redirect()->back()->with('success','data updated successfully');

   }
   
    }
    public function deleteSlider($id){
        $slider=slider::find($id);
        $old_image=$slider->image;
        unlink($old_image);
        DB::table('sliders')->where('id',$id)->delete();
        return Redirect()->route('home.slider')->with('success','data deleted succesfully');
    }
    public function multipic(){
        $portfolios=Portfolio::all();
    return view('admin.portfolio.index',compact('portfolios'));
    }
    public function createPortfolio(){
        return view('admin.portfolio.creatPortfolio');
    }
    public function AddPortfolio(Request $request){
        $images=$request->file('images');
    foreach($images as $multi_img){
    $name_gen=hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
    Image::make($multi_img)->resize(1920,1024)->save('images/portfolio/'.$name_gen);
    $last_image='images/portfolio/'.$name_gen;
    Portfolio::insert([
        'images'=>$last_image,
        'created_at'=>Carbon::now()
    ]);
          
        }
        return Redirect()->route('home.portfolio')->with('success','portfolio added successfully');
    }

    public function portfolio(){
        $images=Portfolio::all();
        return view('Pages.portfolioPage',compact('images'));
    }
}
