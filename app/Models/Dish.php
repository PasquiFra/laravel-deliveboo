<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'diet', 'course', 'ingredients', 'price'];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function abstract()
    {
        return substr($this->ingredient, 0, 30);
    }

    public function printImage()
    {
        return asset('storage', $this->image);
    }
}
