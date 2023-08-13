<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelsModel extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'id_level';
    protected $allowedFields = ['title', 'details', 'id_mem', 'id_project' ,'d_start','d_end','level#','states'];

    public function getlevel()
    {
        //return $this->findAll();
        return $this->select('*')->findAll();

    }

    public function saveLevel($data)
    {
        // $projectCode = $data['id_project'] . $data['pro_name'];
        // $data['project_code'] = $projectCode;

        //unset($data['id_project']); // Remove the id_project field from the data array as it's not needed now

        return $this->insert($data);
    }
}


