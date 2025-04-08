<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'posting_date',
        'deadline',
        'file',
        'type'
    ];

    protected $casts = [
        'posting_date' => 'datetime',
    ];

}
