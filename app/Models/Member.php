<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'members';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'role_id',
        'avatar',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
