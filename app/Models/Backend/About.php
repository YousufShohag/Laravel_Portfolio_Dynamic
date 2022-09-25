<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_long_description',
        'title',
        'about_short_description',
        'image',
        'birthday',
        'website',
        'phone',
        'age',
        'city',
        'degree',
        'freelance',
        'email',
        'about_footer_desscription',
    ];
}
