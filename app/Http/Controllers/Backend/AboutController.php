<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;
use Image;
use File;


class AboutController extends Controller
{
    public function add(){
        return view('backend/pages/About/about');
    }

    public function store(Request $request){
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/about/'.$customName);
            Image::make($images)->save($location);
           
        }
        $about = new About();
        $about->title = $request->title;
        $about->about_long_description = $request->about_long_description;
        $about->about_short_description = $request->about_short_description;
        $about->image =  $customName;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->age = $request->age;
        $about->city = $request->city;
        $about->degree = $request->degree;
        $about->freelance = $request->freelance;
        $about->email = $request->email;
        $about->about_footer_desscription = $request->about_footer_desscription;
        
        $about->save();
        return response()->json([
            "status"=>"success"
        ]);
    }
    public function showAbout(){
        $about = About::all();
        return response()->json([
            "data"=>$about
        ]);
    }
    public function destroy($id){
        $about = About::find($id);
        if (File::exists('backend/about/'.$about->image)) {
            File::delete('backend/about/'.$about->image);
        }
        $about->delete();
        return response()->json([
            "status"=>"success",
        ]);
    }

    public function editAbout($id){
        $about = About::find($id);
        return response()->json([
            'data'=>$about
        ]);
    }

    public function aboutUpdate(Request $request, $id){
        $about = About::find($id);
        if ($request->image) {
            if (File::exists('backend/about/'.$about->image)) {
                File::delete('backend/about/'.$about->image); 
                $images = $request->file('image');
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/about/'.$customName);
                Image::make($images)->save($location);
                $about->image =$customName ;
            }
           
           
        }

            $about->title = $request->title;
            $about->about_long_description = $request->about_long_description;
            $about->about_short_description = $request->about_short_description;
            $about->birthday = $request->birthday;
            $about->website = $request->website;
            $about->phone = $request->phone;
            $about->age = $request->age;
            $about->city = $request->city;
            $about->degree = $request->degree;
            $about->freelance = $request->freelance;
            $about->email = $request->email;
            $about->about_footer_desscription = $request->about_footer_desscription;
            //$about->image = $customName;
            
            $about->update();
            return response()->json([
            'status'=>'success'
        ]);
    }

}
