<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    protected $fillable = [
        't_1',
        't_2',
        't_3',
        't_4',
        't_5',
        't_6',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'img_5',
        'img_6',
    ];
}
