<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTo extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'photo',
        'discription_uz',
        'discription_ru',
        'discription_en',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
