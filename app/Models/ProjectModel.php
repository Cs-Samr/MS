<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    protected $allowedFields = ['pro_name','project_code', 'd_start', 'd_end','details'];
    

    public function getpro()
    {
       // return $this->select('pro_name', 'd_start', 'd_end')->findAll();
       return $this->select('*')->findAll();
    }

    public function getProjectsCount()
    {
        return $this->countAllResults(); // This will return the total number of rows in the 'project' table
    }

    public function saveProject($data)
    {
        // $projectCode = $data['id_project'] . $data['pro_name'];
        // $data['project_code'] = $projectCode;

        //unset($data['id_project']); // Remove the id_project field from the data array as it's not needed now

        return $this->insert($data);
    }
    public function deleteProject($projectId)
    {
        return $this->where('id_project', $projectId)->delete();
    }
} 
