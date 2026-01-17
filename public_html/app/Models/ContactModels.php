<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModels extends Model
{
    protected $table = 'contact';       // Table name
    protected $allowedFields = ['name', 'email', 'subject', 'message']; // Allowed columns

    public function insertContact($data)
    {
        return $this->insert($data); // Uses CI4 built-in insert
    }
}
