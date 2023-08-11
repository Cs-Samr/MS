<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    protected $allowedFields = ['pro_name','project_code', 'd_start', 'd_end','details','level#','state','type'];
    

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
    public function deleteProject($id_project)
    {
        return $this->where('id_project', $id_project)->delete();
    }

    public function getNames()
    {
        $query = $this->select('pro_name, project_code,id_project,state')->findAll();
    
        $data = array(
            'pro_name' => array_column($query, 'pro_name'),
            'project_code' => array_column($query, 'project_code'),
            'id_project' => array_column($query, 'id_project'),
            'state' => array_column($query, 'state')


        );
    
        return $data;
    }
    
        


} 
