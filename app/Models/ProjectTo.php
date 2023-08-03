<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTo extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'photo',
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

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    
}
