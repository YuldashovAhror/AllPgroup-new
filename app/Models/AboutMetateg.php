<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMetateg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
        'photo',
        'discription',
    ];
}
