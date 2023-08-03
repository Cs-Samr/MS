<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelsModel extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'id_level';
    protected $allowedFields = ['title', 'details', 'id_mem', 'id_project' ,'time'];

    public function getuser()
    {
        return $this->findAll();
    }
}


