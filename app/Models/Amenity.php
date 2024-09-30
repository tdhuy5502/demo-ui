<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_amenity');
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_amenity');
    }
}
