<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'ID_Tasks';
    protected $allowedFields = ['Title', 'Details', 'ID_Mem', 'ID_Project'];

    public function getuser()
    {
        return $this->findAll();
    }
}


