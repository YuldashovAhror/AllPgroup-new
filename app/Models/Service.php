<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'second_photo',
        'name_uz',
        'name_ru',
        'name_en',
        'title_uz',
        'title_ru',
        'title_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];

    public function servicetos()
    {
        return $this->hasMany(ServiceTo::class, 'service_id');
    }
}
