<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'photo',
        'name_uz',
        'name_ru',
        'name_en',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
    ];
}
