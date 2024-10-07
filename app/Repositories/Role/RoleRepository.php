<?php

namespace App\Repositories\Role;

use App\Models\Role;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository
{
    public function getModel()
    {
        return new Role();
    }
}