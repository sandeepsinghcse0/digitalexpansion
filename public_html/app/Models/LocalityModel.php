<?php

namespace App\Models;

use CodeIgniter\Model;

class LocalityModel extends Model
{
    protected $table = 'kolkata_localities';
    protected $primaryKey = 'id'; // adjust if your primary key is different
    protected $allowedFields = ['name']; // list actual fields you allow for insert/update

    public function getLocalities()
    {
        return $this->asObject()->findAll(); // or you can use $this->asArray()->findAll() if needed
    }
}
