<?php

namespace App\Repositories\Contact;

use App\Models\ClientContact;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepository
{
    public function getModel()
    {
        return new ClientContact();
    }

    public function create($data)
    {
        $contact = $this->save($data);
        $this->model = $contact;

        return $contact;
    }

    public function update($data)
    {
        $contact = $this->save($data,$data['id']);
        $this->model = $contact;

        return true;
    }
}