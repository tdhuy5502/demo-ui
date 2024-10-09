<?php

namespace App\Repositories\Donation;
use App\Models\Donation;
use App\Repositories\BaseRepository;

class DonationRepository extends BaseRepository
{
    public function getModel()
    {
        return new Donation();
    }

    public function create($data)
    {
        $donate = $this->save($data);
        $this->model = $donate;

        return $donate;
    }

    public function update($data)
    {
        $donate = $this->save($data,$data['id']);
        $this->model = $donate;

        return true;
    }
}