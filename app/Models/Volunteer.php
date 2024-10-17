<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteers';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'project_id',
        'message',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
