<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accessor extends Model
{
    use HasFactory;
    public $connection = "mysql2";
}
