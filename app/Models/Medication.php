<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Medication extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'medications';

    protected $fillable = [
        'name',
        'description',
        'quantity',

    ];

}
