<?php

namespace App\Models;

use CodeIgniter\Model;

class Visiters extends Model
{
    protected $table = 'visitors';       // Table name
    protected $allowedFields = ['visitor_ip', 'page', 'date']; // Allowed columns

    public function insertVisitors($data)
    {
        return $this->insert($data); // Uses CI4 built-in insert
    }
}
