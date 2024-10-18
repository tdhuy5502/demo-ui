<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'image',
        'subtitle',
    ];

    public function scopeCreatedThisMonth(Builder $query)
    {
        return $query->whereMonth('created_at',date('m'));
    }
}
