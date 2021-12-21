<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imobil extends Model
{      
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'type',
        'price',
        'rooms_nr',
        'building_type',
        'square_mp',
        'floor',
        'bath',
        'balcony',
        'description',
        'created_at',
    ];


    public function address()
    {
        return $this->hasOne(Address::class);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}


