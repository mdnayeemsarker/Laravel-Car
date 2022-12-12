<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table = 'car_models';
    protected $primaryKey = 'id';

    protected $fillable = ['car_id', 'model_name'];

    /**
     * Get the user that owns the CarModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
