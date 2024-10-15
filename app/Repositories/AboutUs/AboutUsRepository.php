<?php

namespace App\Repositories\AboutUs;

use App\Models\AboutUs;
use App\Models\Donation;
use App\Models\Member;
use App\Models\Volunteer;
use App\Repositories\BaseRepository;

class AboutUsRepository extends BaseRepository {

    public function __construct()
    {

    }

    public function getModel()
    {
        return new AboutUs();
    }

    public function create($data)
    {
        $aboutUsData = $this->save($data);
        $this->model = $aboutUsData;

        return $aboutUsData;
    }

    public function update($data)
    {
        $aboutUsData = $this->save($data,$data['id']);
        $this->model = $aboutUsData;

        return true;
    }

    public function getData()
    {
        $data = $this->getModel()->all()->pluck('content','title')->toArray();

        return $data;
    }

    public function getDonatorCount()
    {
        $donationCount = Donation::count();

        return $donationCount;
    }

    public function getMemberCount()
    {
        $memberCount = Member::whereHas('role',function($query){
            $query->where('name','!=','CEO');
        })->count();

        return $memberCount;
    }

    public function getVolunteersCount()
    {
        $volunnteersCount = Volunteer::count();

        return $volunnteersCount;
    }

    public function getMembers()
    {
        $members = Member::with('role')->get();

        return $members;
    }
}