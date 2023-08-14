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

    public function saveLevel1($leveldata)
    {
        return $this->insert($leveldata);
    }

    
    public function saveLevel2($leveldata)
    {
        // Handle saving data for level 2
        return $this->insert($leveldata);
    }

    public function saveLevel3($leveldata)
    {
        // Handle saving data for level 2
        return $this->insert($leveldata);
    }

    public function saveLevel4($leveldata)
    {
        // Handle saving data for level 2
        return $this->insert($leveldata);
    }



}


