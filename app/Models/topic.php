<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $fillable = [
        't_name','t_diss'
    ];
    function gettnameattribute($value)
    {
        // return ucfirst($value)->lcfirst($value);
        return ucfirst($value)." [laravel]";
    }
}
