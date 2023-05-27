<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'photo',
        'name',
        'phone',
        'discription',
        'vacancy_number',
    ];

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
