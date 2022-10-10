<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fleet_number', 'driver_id', 'packing_charge', 'created_by'];


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public static function booted(){

        static::creating(function($model)
        {
            $model->created_by = auth()->id();
            $model->fleet_number = "K".rand(12,34353).time();
        });
    }
}
