<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'photo',
        'second_photo',
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'view',
    ];

    public function projecttos()
    {
        return $this->hasMany(ProjectTo::class, 'project_id');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
