<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Home;
use Image;
use File;

class HomeController extends Controller
{
    public function home(){
        return view('backend/pages/home/home');
    }
    public function storeHome(Request $request){
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/home/'.$customName);
            Image::make($images)->save($location);
           
        }
        $home = new Home();
        $home->name = $request->name;
        $home->description = $request->description;
        $home->image =  $customName;
        $home->save();
        return response()->json([
            "status"=>"success"
        ]);
    }
    public function showHome(){
        $data = Home::all();
       return response()->json([
            'show'=>$data
       ]);
    }
    public function deleteHome($id){
        $home = Home::find($id);
        if (File::exists('backend/home/'.$home->image)) {
            File::delete('backend/home/'.$home->image);
        }
        $home->delete();
        return response()->json([
            "status"=>"success",
        ]);
    }
    public function editteHome($id){
        $home = Home::find($id);
        return response()->json([
            'data'=>$home
        ]);
    }

    public function update(Request $request, $id){
        $home = home::find($id);
        if ($request->image) {
            if (File::exists('backend/home/'.$home->image)) {
                File::delete('backend/home/'.$home->image); 
                $images = $request->file('image');
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/home/'.$customName);
                Image::make($images)->save($location);
                $home->image =$customName ;
            }
           
           
        }

            $home->name = $request->name;
            $home->description = $request->description;
            //$home->image = $customName;
            
            $home->update();
            return response()->json([
            'status'=>'success'
        ]);
    }
}
