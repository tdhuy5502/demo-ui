<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'hotel_id', 'room_type', 'price', 'capacity', 'description',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'room_amenity');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
