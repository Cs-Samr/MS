<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	use App\Models\UserModel;
	use App\Models\ProjectModel;
	use App\Models\LevelsModel;

	
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
		public function pickers() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');

			 ini_set('display_errors', 1);
		
			 $session = session();
			 $data['session'] = \Config\Services::session();
			 $data['username'] = $session->get('user_name');
		 
			 $userModel = new UserModel();
			 $ProjectModel = new ProjectModel();
		 
			 $users = $userModel->getUser();
			 $projects = $ProjectModel->getpro();
		 
			 $data['users'] = $users;
			 $data['projects'] = $projects;
		 
			 // Assuming 'getNames()' is a method of your ProjectModel
			 $projectNames = array_column($projects, 'pro_name'); // Extract 'pro_name' from each project
			 $data['project_names'] = $projectNames;
			return view('deskapp/forms/form-pickers',$data);
		}


		public function wizard() {
			ini_set('display_errors', 1);
		
			$session = session();
			$data['session'] = \Config\Services::session();
			$data['username'] = $session->get('user_name');
		
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

		public function saveForm() {
			$levelsModel = new LevelsModel();
		
			if ($this->request->getMethod() === 'post') {
				$formData = $this->request->getPost();
		
				if ($levelsModel->saveLevel($formData)) {
					// Success! Redirect or display a success message
					return redirect()->to('/path/to/redirect');
				} else {
					// Error! Handle the error, maybe show an error message
					// You can get validation errors using $levelsModel->errors()
					return redirect()->back()->withInput()->with('error', 'Failed to save the form.');
				}
			}
		}
		
		


		public function save(){
			ini_set('display_errors', 1);

			helper(['form','url']);

			// Load the model
		
			// Get the number of steps (assumes you have 4 steps)
			$numSteps = 4;

			// Loop through each step and save the data
			// Create an array to hold the data for this step
			$rules = [
				'title' => 'required',
				'level#' => 'required',
				'states' => 'required',
				'd_start' => 'required',
				'd_end' => 'required',
				'id_mem' => 'required',

			];

			if ($this->request->getMethod() == 'post' && $this->validate($rules)) {
				$levelsModel = new LevelsModel();

			$data = [
				'title' => $this->request->getPost('title'),  
				'level#' => $this->request->getPost('level#'),
				'details' => $this->request->getPost('details'),
				'states' => $this->request->getPost('states'),
				'd_start' => $this->request->getPost('d_start'),
				'd_end' => $this->request->getPost('d_end'),
				'id_mem' => $this->request->getPost('id_mem')
			];
			print_r($levelsModel->errors()); // Print validation errors


			// Call the insert method on the model to save the data for this step
			// $levelsModel->insert($data);
			// $levelsModel->save($data); 
			$levelsModel->saveLevel($data);


		
			// Uncomment and modify the code below if you want to save data to the ProjectModel
			/*
			$ProjectModel = new ProjectModel();
		
			// Create an array to hold the data for this step
			$prodata = [
				'type' => $this->request->getPost('type'),
			];
		
			// Call the insert method on the model to save the data for this step
			$ProjectModel->insert($prodata);
			*/
			return redirect()->to('deskapp/forms/form-wizard'); // Redirect after saving

		} else {
            $data['validation'] = $this->validator;
			echo 'fild';
            return view('deskapp/forms/form-wizard', $data);
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