<?php

namespace App\Repositories\WhatWeDo;

use App\Models\WhatWeDo;
use App\Repositories\BaseRepository;

class WhatWedoRepository extends BaseRepository
{
    public function getModel()
    {
        return new WhatWeDo();
    }

    public function create($data)
    {
        $whatwedo = $this->save($data);
        $this->model = $whatwedo;

        return $whatwedo;
    }

    public function update($data)
    {
        $whatwedo = $this->save($data,$data['id']);
        $this->model = $whatwedo;

        return true;
    }
}