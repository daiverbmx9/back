<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    // Add fillable property into product model
    protected $fillable = ['email', 'password'];
}
