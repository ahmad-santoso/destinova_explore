<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline',
        'date_of_journey',
        'source',
        'destination',
        'route',
        'dep_time',
        'arrival_time',
        'duration',
        'total_stops',
        'additional_info',
        'price',
    ];
}
