<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table = 'config';
    protected $primaryKey = 'id'; // change if different
    protected $allowedFields = ['site_name', 'email', 'phone']; // replace with real fields

    public function getConfig()
    {
        return $this->asObject()->first(); // gets the first row from the config table
    }
}
