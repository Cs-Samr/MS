<?php
 namespace App\Controllers\Deskapp;
 use App\Controllers\BaseController;
 use App\Models\UserModel;
 use App\Models\ProjectModel;


 /**
  * 
  */
 class Dashboard extends BaseController
 {
 	
 	public function index()
 	{
 		$model = new UserModel();
		$model2 = new ProjectModel();

        $session = session();


        $data['username'] = $session->get('user_name');
        $data['session'] = \Config\Services::session();

        // Retrieve the number of users from the UserModel
        $data['userCount'] = $model->getUserCount();
		$data['projectsCount'] = $model2->getProjectsCount();


        echo view('deskapp/dashboard/index', $data);
 	}
 	public function one()
 	{
 		$session = session();
 		$data['session'] = \Config\Services::session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index',$data);
		
 	}

 	public function two()
 	{
		$model2 = new ProjectModel();

        $session = session();


        $data['username'] = $session->get('user_name');
        $data['session'] = \Config\Services::session();

        // Retrieve the number of users from the UserModel
		$data['projectsCount'] = $model2->getProjectsCount();

 		echo view('deskapp/dashboard/index2',$data);
 	}
 	public function three()
 	{
 		$session = session();
 		$data['session'] = \Config\Services::session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index3',$data);
 	}
 	
 }