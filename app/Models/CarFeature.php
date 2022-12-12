<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    use HasFactory;
    protected $table = 'car_features';
    protected $primaryKey = 'id';

    protected $fillable = [
        'model_id', 
        'aircondition',
        'child_seat',
        'gps',
        'luggage',
        'music',
        'seat_belt',
        'sleeping_bag',
        'watter',
        'bluetooth',
        'on_board_computer',
        'audio_input',
        'car_kit',
        'remote_control_locking',
        'climate_control',
        'long_term_trips',
    ];
}
