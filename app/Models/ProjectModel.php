<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    protected $allowedFields = [ 'pro_name', 'd_start', 'd_end'];
    

    public function getuser()
    {
       // return $this->select('pro_name', 'd_start', 'd_end')->findAll();
       return $this->select('*')->findAll();
    }

}

