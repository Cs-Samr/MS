<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
<<<<<<< HEAD
    protected $allowedFields = [ 'project_code','pro_name', 'd_start', 'd_end','details'];
=======
    protected $allowedFields = ['pro_name','project_code', 'd_start', 'd_end','details'];
>>>>>>> 2de4a76f36a7ca2f898a178a63a35c2ac185adae
    

    public function getpro()
    {
       // return $this->select('pro_name', 'd_start', 'd_end')->findAll();
       return $this->select('*')->findAll();
    }

    public function getProjectsCount()
    {
        return $this->countAllResults(); // This will return the total number of rows in the 'project' table
    }

<<<<<<< HEAD
    public function saveProject($data)
    {
        // $projectCode = $data['id_project'] . $data['pro_name'];
        // $data['project_code'] = $projectCode;

        //unset($data['id_project']); // Remove the id_project field from the data array as it's not needed now

        return $this->insert($data);
=======
    public function deleteProject($projectId)
    {
        
        return $this->where('id_project', $projectId)->delete();
>>>>>>> 2de4a76f36a7ca2f898a178a63a35c2ac185adae
    }
}
