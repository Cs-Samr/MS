<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	use App\Models\UserModel;
	use App\Models\ProjectModel;
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

		/*public function save()
		{
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			helper(['form','url']);
			
			$rules = [
				//'project_code' => 'required|min_length[2]|max_length[100]',
				'title' => 'required|min_length[2]|max_length[100]',
				'details' => 'required|min_length[2]|max_length[100]',
				'time' => 'required',
				
			];
	
			if ($this->request->getMethod() == 'post' && $this->validate($rules)) {
				$model = new ProjectModel();
				$data = [
					'title' => $this->request->getVar('title'),
					'details' => $this->request->getVar('details'),
					'time' => $this->request->getVar('time'),
				];
	

				 $model = new ProjectModel();
				 $model->save($data); 
	
			} else {
				$data['validation'] = $this->validator;
				return view('deskapp/Ui/ui-cards', $data);
			}
	
		
		}*/


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
			//ini_set('display_errors', 1);
			//ini_set('display_startup_errors', 1);
			helper(['form','url']);
			
			$rules = [
				//'project_code' => 'required|min_length[2]|max_length[100]',
				'pro_name' => 'required|min_length[2]|max_length[100]',
				//'detalis' => 'required|min_length[2]|max_length[500]',
				'd_start' => 'required',
				'd_end' => 'required'
			];
	
			if ($this->request->getMethod() == 'post' && $this->validate($rules)) {
				$model = new ProjectModel();
				$data = [
					//'project_code' => $this->request->getVar('project_code'),
					'pro_name' => $this->request->getVar('pro_name'),
					'd_start' => $this->request->getVar('d_start'),
					'd_end' => $this->request->getVar('d_end'),
					//'detalis' => $this->request->getVar('detalis'),
				];
	

				 $model = new ProjectModel();
				 $model->save($data); 
				 
				 return redirect()->to('http://localhost/MS/deskapp/ui/timeline');

	
			} else {
				$data['validation'] = $this->validator;
				return view('deskapp/Ui/ui-cards', $data);
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
		public function tooltip()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			// Load the ProjectModel
			$ProjectModel = new ProjectModel();
		
			// Get the projects details
			$data['projects'] = $ProjectModel->getuser();
			$userModel = new UserModel();
			 $user = $userModel->getUser();

			 $data['user'] = $user;
			return view('deskapp/ui/ui-tooltip-popover',$data);


		}


		public function editProject($projectId) {
			// Load the ProjectModel
			$projectModel = new ProjectModel();
			// Get the users details
			$userModel = new UserModel();
			 $user = $userModel->getUser();
			 $data['users'] = $user;

			// Get the project details based on the project ID
			$data['project'] = $projectModel->find($projectId);
		
			return view('deskapp/ui/ui-tooltip-popover', $data);
		
		}
	

		public function updateProject() {

			// Load the ProjectModel
			$projectModel = new ProjectModel();

			// Get the project ID from the form submission
			$projectId = $this->request->getPost('project_id');
		
			// Fetch the project details based on the project ID
			$project = $projectModel->find($projectId);
		
			// Update the project's information based on the form data
			$project['pro_name'] = $this->request->getPost('pro_name');
			$project['d_start'] = $this->request->getPost('d_start');
			$project['d_end'] = $this->request->getPost('d_end');
		
			// Save the updated project data to the database using the update() method
			$projectModel->update($projectId, $project);
		
			// Redirect the user back to the projects list page or wherever you want to redirect after update
			return redirect()->to(base_url("deskapp/ui/editProject/{$projectId}"));	
			
		} 
		public function typography()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/ui/ui-typography',$data);
		}
	}