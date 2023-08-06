<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    protected $allowedFields = [ 'pro_name', 'd_start', 'd_end','details'];
    

    public function getpro()
    {
       // return $this->select('pro_name', 'd_start', 'd_end')->findAll();
       return $this->select('*')->findAll();
    }

    public function getProjectsCount()
    {
        return $this->countAllResults(); // This will return the total number of rows in the 'project' table
    }
}
