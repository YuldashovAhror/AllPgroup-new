<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'newcategory_id',
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
        'date',
        'alt_uz',
        'alt_ru',
        'alt_en',
        'title_uz',
        'title_ru',
        'title_en',
    ];

    public function newcategories()
    {
        return $this->belongsTo(NewCategory::class, 'newcategory_id');
    }

    public function newtos()
    {
        return $this->hasMany(NewsTo::class, 'news_id');
    }
}
