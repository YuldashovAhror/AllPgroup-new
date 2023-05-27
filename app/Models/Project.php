<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'second_photo',
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];

    public function projecttos()
    {
        return $this->hasMany(ProjectTo::class, 'project_id');
    }
}
