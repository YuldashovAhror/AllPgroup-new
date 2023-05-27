<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];
}
