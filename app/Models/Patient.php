<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'code',
        'name',
        'address',
        'phone',
        'date_of_birth',
        'gender',
        'height',
        'weight',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'height' => 'decimal:2',
        'weight' => 'decimal:2',
    ];
}
