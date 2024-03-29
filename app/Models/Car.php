<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'price', 'description', 'image_path'];

    /**
     * Get all of the comments for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    /**
     * Get all of the carFeatures for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function carFeatures()
    {
        return $this->hasManyThrough(
            CarFeature::class, 
            CarModel::class,
            'car_id',
            'model_id',
        );
    }

}
