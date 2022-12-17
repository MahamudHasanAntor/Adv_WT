<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name','last_name', 'address','phone','carid','date','time'
    ];
}
