<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_infos extends Model
{
    use HasFactory;
    protected $fillable = ['image','name','email','gender','dateofbirth','phone','score'];

}
