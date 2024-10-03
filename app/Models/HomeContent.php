<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeContent extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "home_contents";

    protected $fillable = [
        'key',
        'value'
    ];
}
