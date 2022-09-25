<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactSkill extends Model
{
    use HasFactory;
    protected $fillable = ['f_description','f_nummber','f_name','f_title','s_description','s_name','s_number','s_vloume'];
}
