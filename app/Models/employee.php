<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public $timestamps=false; //For Post API
    protected $fillable = [
        'name',
        'email',
        'address',
    ];
    // Mutator Function
    function setAddressAttribute($value){
        return $this->attributes["address"] = $value. " Pakistan";
    }
    // One To One Relation
    function companyData(){
        return $this->hasOne('App\Models\Company');
    }
    // One To Many Relation
    function companyManyData(){
        return $this->hasMany('App\Models\Company');
    }
}
