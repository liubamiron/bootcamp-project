<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;

    protected $fillable =[
      'name', 
      'email',
      'telephone',
    ];

    protected $attributes = [
        'password',
        'remember_token',
    ];protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
