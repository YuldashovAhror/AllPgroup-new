<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'ok',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'section_id');
    }
}
