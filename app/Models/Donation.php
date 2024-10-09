<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'donations';

    protected $fillable = [
        'donator_name',
        'project_id',
        'amount',
        'message',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
