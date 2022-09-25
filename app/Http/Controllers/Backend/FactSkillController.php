<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\FactSkill;

class FactSkillController extends Controller
{
    public function add(){
        return view ('Backend/pages/FactSkill/FactSkill');
    } 
    public function show(){
        $show = FactSkill::all();
        return view ('Backend/pages/FactSkill/show',compact('show'));
    }
    public function store(Request $input){
        $FactSkill = new FactSkill();
        $FactSkill->f_description = $input->f_description;
        $FactSkill->f_nummber = $input->f_nummber;
        $FactSkill->f_name = $input->f_name;
        $FactSkill->f_title = $input->f_title;
        $FactSkill->s_description = $input->s_description;
        $FactSkill->s_name = $input->s_name;
        $FactSkill->s_number = $input->s_number;
        $FactSkill->s_vloume = $input->s_vloume;
        $FactSkill->save();
        return  redirect()->route('show');
    }
}
