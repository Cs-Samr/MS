<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
<<<<<<< HEAD
    protected $allowedFields = [ 'pro_name', 'project_code','d_start', 'd_end','details'];
=======
    protected $allowedFields = [ 'pro_name', 'd_start', 'd_end','details'];
>>>>>>> 39ddde44849a2955af536edf1942570917d45f75
    

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
