<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTo extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'photo',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
