<?php

namespace App\Repositories\Member;

use App\Models\Member;
use App\Repositories\BaseRepository;

class MemberRepository extends BaseRepository
{
    public function __construct() {
        
    }

    public function getModel()
    {
        return new Member();
    }

    public function create($data)
    {
        $data = $this->save($data);
        $this->model = $data;

        return $data;
    }

    public function update($data)
    {
        $data = $this->save($data, $data['id']);
        $this->model = $data;

        return true;
    }
}