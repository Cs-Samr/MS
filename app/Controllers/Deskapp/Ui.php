<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	use App\Models\UserModel;
	use App\Models\ProjectModel;
	use App\Models\ProjectAssign;
	use App\Models\LevelsModel;

	/**
	 * ui controller
	 */
	class Ui extends BaseController
	{
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/Users_page',$data);
		}
		public function buttons()
		{
			
			$session = session();
			$data['session'] = \Config\Services::session();
			$data['username'] = $session->get('user_name');
	
			// Load the UserModel
			$userModel = new UserModel();
			$users = $userModel->getUser(); 
			
			
			// Process the users based on the "rules" field
			foreach ($users as &$user) {
				if ($user['rules'] === '1') {
					$user['rules'] = 'system manager';
				} elseif ($user['rules'] === '2') {
					$user['rules'] = 'manager';
				} else {
					$user['rules'] = 'member';
				}

				$user['edit_url'] = base_url("deskapp/ui/edit/{$user['id_mem']}");

			}
	
			$data['users'] = $users;

			
        return view('deskapp/ui/Users_page', $data);

		}

		public function delete($userId){
			//print_r('delete');

			//if ( $this->request->getMethod(true) === 'POST') {
				// Get the user ID from the POST request
				//$userId = $this->request->getPost('id_mem');
	
				// Load the UserModel
				$userModel = new UserModel();
	
				// Perform the user deletion using the UserModel
				$success = $userModel->deleteUser($userId);

			
				$session = session();
				$data['session'] = \Config\Services::session();
				$data['username'] = $session->get('user_name');
		
				// Load the UserModel
				$userModel = new UserModel();
				$users = $userModel->getUser();
				
				
				// Process the users based on the "rules" field
				foreach ($users as &$user) {
					if ($user['rules'] === '1') {
						$user['rules'] = 'system manager';
					} elseif ($user['rules'] === '2') {
						$user['rules'] = 'manager';
					} else {
						$user['rules'] = 'member';
					}
	
				}
		
				$data['users'] = $users;
	
				
			return view('deskapp/ui/Users_page', $data);
	
				// Return the result of the deletion as JSON response
				//return $this->response->setJSON(['success' => $success]);
		//	}
		}

		public function edit($userId){

			  // Load the UserModel
			  $userModel = new UserModel();

			  // Get the user details based on the user ID
			  $data['user'] = $userModel->find($userId);
		  
			  return view('deskapp/ui/edit_user', $data);


		}

		

		public function update()
 {
    // Load the UserModel
    $userModel = new UserModel();

    // Get the user ID from the form submission
    $userId = $this->request->getPost('id_mem');

    // Fetch the user details based on the user ID
    //$user = $userModel->find($userId);


  // Update the user's information based on the form data
  $user['name'] = $this->request->getPost('name');
  $user['department'] = $this->request->getPost('department');
  $user['employee_no'] = $this->request->getPost('employee_no');
  $user['email'] = $this->request->getPost('email');
  $user['job_t'] = $this->request->getPost('job_t');
  $user['rules'] = $this->request->getPost('rules');

     // Save the updated user data to the database using the update() method
	 $userModel->update($userId, $user);

	 // Redirect the user back to the users list page (buttons page)
	 return redirect()->to(base_url("deskapp/ui/buttons"));
 }
		

		
		public function cardsHover()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			//$data['user'] = $session->get('user');
			 
			 $userModel = new UserModel();
			 $user = $userModel->dd();

			 $data['users'] = $user;
			 return view('deskapp/ui/ui-cards-hover',$data);
			

		}


		public function cards()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');			

			 $userModel = new UserModel();
			 $data['names'] = $userModel->getAllNames();
			 
			 return view('deskapp/ui/ui-cards',$data);

		}

		public function save()
		{
			ini_set('display_errors', 1);

			//ini_set('display_errors', 1);
			//ini_set('display_startup_errors', 1);
			helper(['form','url']);
			
			$rules = [
				'pro_name' => 'required|min_length[2]|max_length[100]',
				'details' => 'min_length[2]|max_length[500]',
				'd_start' => 'required',
				'd_end' => 'required'
			];

		
	
			if ($this->request->getMethod() == 'post' && $this->validate($rules)) {
				$model = new ProjectModel();
				$model2 = new LevelsModel();


				$data = [
					//'project_code' => $this->request->getVar('project_code'),
					'pro_name' => $this->request->getVar('pro_name'),
					'd_start' => $this->request->getVar('d_start'),
					'd_end' => $this->request->getVar('d_end'),
					'details' => $this->request->getVar('details'),
				]; 

				

				$model->saveProject($data);
				$id = $model->getInsertID();

				$data['state'] = 'قيد الإنشاء';
				

			  // Merge 'id' and 'd_start' and set it to 'code'
				$data['project_code'] = $id.$data['d_start'];
				$data['id_project'] = $id ;
        
				$model->replace($data);
				 

			
				// Load the models
				$userModel = new UserModel();
				$projectModel = new ProjectModel();
				$ProjectAssign = new ProjectAssign();
			
				// Get data from the user and project tables
				$users = $userModel->findAll();
				$projects = $projectModel->findAll();
		
				// Loop through the users and transfer data to the project_assign table
				foreach ($users as $user) {
					foreach ($projects as $project) {
						$data = [
							'id_memfk' => $user['id_mem'],
							'id_projectfk' => $project['id_project'], // Specify the source of this data
							'rules' => $user['rules']
							// Add other fields as needed
						];
		
						// Insert data into the project_assign table
						$ProjectAssign->insert($data);
					}
				}


				
			

	          
				 return redirect()->to('http://localhost/MS/deskapp/forms/wizard');

	
			} else {
				$data['validation'] = $this->validator;
				$data2['validation'] = $this->validator;

				return view('deskapp/Ui/ui-cards', $data,$data2);
			}
	
		
		}
		
		
     	public function carousel()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-carousel',$data);
		}
		public function listgroup()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-list-group',$data);
		}
		public function modals()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-modals',$data);
		}
		public function notification()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-notification',$data);
		}
		public function progressBar()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-progressbar',$data);
		}
		public function rangeSlider()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-range-slider',$data);
		}
		public function sweetAlert()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
			$data['username'] = $session->get('user_name');
		
			// Load the ProjectModel
			$ProjectModel = new ProjectModel();
		
			// Get the projects details
			$data['projects'] = $ProjectModel->getpro();
		
			return view('deskapp/ui/ui-sweet-alert', $data);

		}
		public function tabs()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-tabs',$data);
		}

		public function timeline()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-timeline',$data);
		}

		public function tooltip($projectId)
		{

			$session = session();
			$data['session'] = \Config\Services::session();
			$data['username'] = $session->get('user_name');
	
			// Load the UserModel
			$ProjectModel = new ProjectModel();
			//$Projects = $ProjectModel->find($projectId); 
			$Projects =	$ProjectModel->where('id_project', $projectId)->findAll();
			
			$userModel = new UserModel();
			$users = $userModel->getUser();
			$data['users'] = $users;

			// Process the users based on the "rules" field
			// foreach ($Projects as &$Project) {
			
			// 	$Project['edit_url'] = base_url("deskapp/ui/editProject/{$Project['id_project']}");

			// }
			$data['projects'] = $Projects;


        return view('deskapp/ui/ui-tooltip-popover',$data);

		}

		public function deletePro($projectId) {
			$session = session();
			$data['session'] = \Config\Services::session();
			$data['username'] = $session->get('user_name');
			
			//ini_set('display_errors', 1);
			$projectModel = new ProjectModel();
			$projectAssign = new ProjectAssign();

			$projectAssign->deleteProject($projectId);
			$projectModel->deleteProject($projectId);
			
			$data['alertMessage'] = 'Project has been deleted successfully.';

			$projectModel = new ProjectModel();
			$project = $projectModel->getpro();
			$data['projects'] = $project;
			
			$projectAssign = new ProjectAssign();
			$assipro = $projectAssign->getUser(); 
			$data['project_assign'] = $assipro;
					
			return view('deskapp/ui/ui-sweet-alert', $data);
					
		}
		
		



		public function editProject($projectId) {
			// Load the ProjectModel & UserModel
			$projectModel = new ProjectModel();

			// Get the project details based on the project ID
			$data['projects'] = $projectModel->find($projectId);
		
			return view('deskapp/ui/ui-tooltip-popover', $data);
		
		}
	

		public function updateProject($projectId) {

			// Load the ProjectModel
			$projectModel = new ProjectModel();

			// Get the project ID from the form submission
			$projectId = $this->request->getPost('id_project');
		
			// Fetch the project details based on the project ID
			//$project = $projectModel->find($projectId);
		
			// Update the project's information based on the form data
			$project['pro_name'] = $this->request->getPost('pro_name');
			$project['state'] = $this->request->getPost('state');
			$project['level#'] = $this->request->getPost('level#');
			$project['d_start'] = $this->request->getPost('d_start');
			$project['d_end'] = $this->request->getPost('d_end');
			


		
			// Save the updated project data to the database using the update() method
			$projectModel->update($projectId, $project);
		
			// Redirect the user back to the projects list page or wherever you want to redirect after update
			//return redirect()->to(base_url("deskapp/ui/editProject/{$projectId}"));
			return redirect()->to(base_url("deskapp/ui/sweetAlert"));
				
			
		} 
		public function typography()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-typography',$data);
		}
	}