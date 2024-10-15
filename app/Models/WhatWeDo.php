<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatWeDo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'what_we_dos';

    protected $fillable = [
        'title',
        'subtitle'
    ];

    public function scopeCreateThisMonth(Builder $query)
    {
        return $query->whereYear('created_at',date('y'));
    }
}
