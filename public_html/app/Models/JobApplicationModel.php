<?php

namespace App\Models;
use CodeIgniter\Model;

class JobApplicationModel extends Model
{
    protected $table = 'job_applications';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'position', 'created_at'];
    public function insertJobApplication($data)
    {
        return $this->insert($data);
    }
}
