<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportShoe extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'size',
        'color',
        'mileage', // Add 'mileage' to the fillable fields
    ];    
}
