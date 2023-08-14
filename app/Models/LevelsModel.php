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

    public function saveLevel1($data)
    {
        return $this->insert($data);
    }

    
    public function saveLevel2($data)
    {
        // Handle saving data for level 2
        return $this->insert($data);
    }

    public function saveLevel3($data)
    {
        // Handle saving data for level 2
        return $this->insert($data);
    }

    public function saveLevel4($data)
    {
        // Handle saving data for level 2
        return $this->insert($data);
    }



}


