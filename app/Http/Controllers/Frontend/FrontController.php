<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Home;
use App\Models\Backend\About;

class FrontController extends Controller
{
    public function home(){
        $about = About::all();
        $home = Home::all();
        return view('welcome',compact('home','about'));
    }
}
