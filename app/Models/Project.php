<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'content',
        'people_joined',
        'donated_qty',
        'result',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class,'id');
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function scopeCreatedThisYear(Builder $query)
    {
        return $query->whereYear('created_at',date('Y'));
    }
}
