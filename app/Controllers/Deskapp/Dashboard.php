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
 		ini_set('display_errors',1);
		$model = new UserModel();
		$model2 = new ProjectModel();

        $session = session();
        $data['username'] = $session->get('user_name');
        $data['session'] = \Config\Services::session();

        // Retrieve the number of users from the UserModel
        $data['userCount'] = $model->getUserCount();
		
        // Retrieve the number of Project from the ProjectModel
		$data['projectsCount'] = $model2->getProjectsCount();
		
		//$ProjectModel = new ProjectModel();
		//$data['pro_name'] = $model2->getNames();
		//$data['project_code'] = $model2->getNames();
		$data['project_data'] = $model2->getNames(); 

	

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

       
		// Retrieve the number of Project from the ProjectModel
		$data['projectsCount'] = $model2->getProjectsCount();
		
	
		$data['project_data'] = $model2->getNames(); 
		

 		echo view('deskapp/dashboard/index2',$data);
 	}
 	public function three()
 	{
		ini_set('display_errors',1);
		$model = new UserModel();
		$projectModel = new projectModel();
		$projectAssign = new ProjectAssign();

        $session = session();
        $data['username'] = $session->get('user_name');
        $data['session'] = \Config\Services::session();

    
		$data['project_data'] = $projectModel->getNames(); 
		//$data['project_data'] = $projectModel->findAll();

    $project = $projectModel->find($id_project);
	$projectAssign = $ProjectAssign->getAssignmentsByProject();

  //  if (!$project) {
        // Handle case where project with given ID is not found
        return redirect()->to('/projects'); // Redirect to a projects list page, for example
  //  }

    // Get assignments for the given project ID using UserModel's getProjectAssignments method
   // $projectAssignments = $userModel->getProjectAssignments($id_project);

    // Pass project, assignments, and other data to the view
   // $data['project'] = $project;
   // $data['projectAssignments'] = $projectAssignments;


	         print_r($data);
	 		//echo view('deskapp/dashboard/index3',$data);
 	}
 	
 }