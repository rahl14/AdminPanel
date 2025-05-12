<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email', 
        'logo', 
        'website'
    ];

    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : asset('images/noimage.jpg');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
