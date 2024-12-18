<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primarykey = 'id';
    protected $fillable = ['name','address','mobile'];
}
