<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postavchik extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'link',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
    ];
}
