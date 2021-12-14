<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'created_at',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
