<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceMetateg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'discription',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
    ];
}
