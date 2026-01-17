<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id'; // update if your PK is different
    protected $allowedFields = ['first_name', 'last_name']; // add other fields as needed

    public function getTeams()
    {
        // Raw SQL with alias (because CONCAT is not handled automatically by Query Builder)
        return $this->select('*, CONCAT(first_name, " ", last_name) AS name')
                    ->findAll();
    }

    public function getTeam($id) {
        return $this->select('*, CONCAT(first_name, " ", last_name) AS name')
                    ->where('id', $id)
                    ->first(); // returns a single row as array/object
    }


}
