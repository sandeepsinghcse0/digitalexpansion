<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price']; // adjust fields as needed

    // Return all services as objects
    public function getServices()
    {
        return $this->asObject()->findAll();
    }

    // Return a specific service by ID as an object
    public function getService($id)
    {
        return $this->asObject()->where('id', $id)->first();
    }
}
