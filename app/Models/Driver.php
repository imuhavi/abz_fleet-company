<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'email', 'company', 'created_by'];

    public function vehicles()
    {
        return $this->hasMany(Driver::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
