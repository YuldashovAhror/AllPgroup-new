<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMetateg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'discription',
    ];
}
