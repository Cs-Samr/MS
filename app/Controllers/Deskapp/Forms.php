<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	use App\Models\UserModel;
	use App\Models\ProjectModel;
	use App\Models\LevelsModel;
	use App\Models\ProjectAssign;


	
	/**
	 * forms controller
	 */
	class Forms extends BaseController
	{
		
		public function index() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-basic',$data);
		}
		public function basic() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-basic',$data);
		}
		public function advance() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/advanced-components',$data);
		}
		public function pickers($id_project) {

			$userModel = new UserModel();
			$ProjectModel = new ProjectModel();
			$levelsModel = new LevelsModel();
			$projectAssignModel = new ProjectAssign(); // Correct model instantiation
		
			$users = $userModel->getUser();
			$projects = $ProjectModel->getpro();
			$levels = $levelsModel->getlevel();
		
			$data['users'] = $users;
			$data['projects'] = $projects;
			$data['levels'] = $levels;
		
			// Fetch project assignments
			$projectAssignData = $projectAssignModel->getUser(); // Fetch all assignments
			$projectAssignDataByProject = $projectAssignModel->getAssignmentsByProject($id_project); // Fetch assignments for a specific project
			//$projectAssignByUsers = $userModel->getAssignmentsByProject($projectAssignDataByProject); // Fetch assignments for a specific project
		
			$data['project_assign'] = $projectAssignData; // All assignments
			$data['project_assign_by_project'] = $projectAssignDataByProject; // Assignments for a specific project
			//$data['projectAssignByUsers'] = $projectAssignByUsers; // Assignments for a specific project
			print_r($projectAssignDataByProject);

		 

			 // Assuming 'getNames()' is a method of your ProjectModel
			 $projectNames = array_column($projects, 'pro_name'); // Extract 'pro_name' from each project
			 $data['project_names'] = $projectNames;

			// $id_project = $this->request->getGet('id_project');  
			       $data ['id_project']= $id_project;


            // print_r($data);
			return view('deskapp/forms/form-pickers',$data);
		}


		public function wizard() {
			ini_set('display_errors', 1);
		
			$session = session();
			$data['username'] = $session->get('user_name');
			$data['session'] = $session;
			
			$userModel = new UserModel();
			$ProjectModel = new ProjectModel();
		
			$users = $userModel->getUser();
			$projects = $ProjectModel->getpro();
		
			$data['users'] = $users;
			$data['projects'] = $projects;
		
			// Assuming 'getNames()' is a method of your ProjectModel
			$projectNames = array_column($projects, 'pro_name'); // Extract 'pro_name' from each project
			$data['project_names'] = $projectNames;
		
			//$data['names'] = $userModel->getAllNames();
			return view('deskapp/forms/form-wizard', $data);
		}



		public function saveForm()
			{
				ini_set('display_errors', 1); 
				helper(['form', 'url']);

				// Load the LevelsModel
				$levelsModel = new LevelsModel(); 
				$ProjectModel = new ProjectModel(); 


				if ($this->request->getMethod() == 'post' ) {
				$leveldata = [
					'title' => $this->request->getVar('title'),
					'details' => $this->request->getVar('details'),
                    'id_mem' => $this->request->getVar('id_mem'),
					'id_project' => $this->request->getVar('id_project'),
					'd_start' => $this->request->getVar('d_start'),
					'd_end' => $this->request->getVar('d_end'),
					'level#' => $this->request->getVar('level#'),
					'states' => $this->request->getVar('states'),
				];

				
				//print_r($leveldata);
				// Save form data to the levels table
				// $levelsModel->insert($leveldata);

				// Update the "level#" column in the project table
				$projectData = [
					'level#' => $this->request->getVar('level#')
				];
				$ProjectModel->update($this->request->getVar('id_project'), $projectData);
			
				// $projectData2 = [
					
				// 	'type' => $this->request->getVar('type')
				// ];
				// $ProjectModel->update($this->request->getVar('type'), $projectData2);
			
				//print_r($ProjectModel->getpro());

				// Redirect after successful save

				 // Determine the appropriate method to call based on the level
				 $saveMethod = 'saveLevel' . $leveldata['level#'];

				 // Call the appropriate save method
				 if (method_exists($levelsModel, $saveMethod)) {
					 $levelsModel->$saveMethod($leveldata);
				 }

				$this->session->setFlashdata('form_success', 'تم حفظ المرحلة الحالية');
				


				
				return redirect()->to('/MS/deskapp/forms/wizard');
			} else {
				// Validation failed, return to the view with validation errors
				$data['validation'] = $this->validator;
				return view('deskapp/forms/form-wizard', $data);
			}
		}

		
		
		public function save()
		{
			ini_set('display_errors', 1);
			helper(['form','url']);
			
			// Load the models
			$userModel = new UserModel(); // Assuming UserModel class is available
			$projectModel = new ProjectModel(); // Assuming ProjectModel class is available
			$ProjectAssign = new ProjectAssign(); // Assuming ProjectAssign class is available
		    $LevelsModel = new LevelsModel();
		
			$rules = [
				'pro_name' => 'required|min_length[2]|max_length[100]',
				'details' => 'min_length[2]|max_length[500]',
				'd_start' => 'required',
				'd_end' => 'required',
				'state' => 'required'
			];
		
			if ($this->request->getMethod() == 'post' && $this->validate($rules)) {
				$data = [
					'pro_name' => $this->request->getVar('pro_name'),
					'd_start' => $this->request->getVar('d_start'),
					'd_end' => $this->request->getVar('d_end'),
					'state' => $this->request->getVar('state'),
					'details' => $this->request->getVar('details'),
				]; 

				

		
				// Save project details
				//$projectModel->saveProject($data);
				$projectModel->insert($data);
				$id = $projectModel->getInsertID();
		
				// Update project with project code and ID
				$data['project_code'] = $id . $data['d_start'];
				$data['id_project'] = $id;
				$projectModel->replace($data);
		
				// Handle user assignment
				if ($this->request->getPost('selected_names')) {
					$selectedUserIDs = $this->request->getPost('selected_names');
					$assignmentData = [];
		
					foreach ($selectedUserIDs as $value) {
						$assignmentData[] = [
							'id_memfk' => $value,
							'id_projectfk' => $id,
						];
					}
		
					if (!empty($assignmentData)) {
						$ProjectAssign->insertBatch($assignmentData);
					}
				}
				$this->session->setFlashdata('id_project', $id);

		
				// Redirect after successful save
				return redirect()->to('/MS/deskapp/forms/wizard');
			} else {
				// Validation failed, return to the view with validation errors
				$data['validation'] = $this->validator;
				return view('deskapp/Ui/ui-cards', $data);
			}
		}
		
		



		public function html5Editor() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/html5-editor',$data);
		}
		public function imageCropper() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/image-cropper',$data);
		}
		public function imageDropZone() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/image-dropzone',$data);
		}
	}