<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use App\Models\accessor;

class DbConnectionController extends Controller
{
    //     Manualy QueryBuilder
    // Same DB
    // function dbConn(){
    //     return DB::table('employees')->get();
    // }
    // SECOND DataBase
    // function dbConn(){
    //     return DB::connection('mysql2')->table('accessors')->get();
    // }
    //      Using Models
    // Same DB
    // function dbConn(){
    //     return employee::all();
    // }
    // SECOND DB
    // In model public $connection="mysql2";
    function dbConn(){
        return accessor::all();
    }
}
