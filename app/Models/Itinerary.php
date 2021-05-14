<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;
    $protected $fillable = [
    	'day', 'program', 'overnight', 'it_id'
    ];
}
