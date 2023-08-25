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
        'keyword_uz',
        'keyword_ru',
        'keyword_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'view',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
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
