<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table='register';
    public $timestamps=false;
    protected $fillable=[
        'id','name','age','email','password'
    ];
    
}
