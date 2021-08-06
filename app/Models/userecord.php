<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userecord extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $fillable = ['id','name','email','phone'];
}
