<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
    use App\Models\UserModel;

    /**
     * 
     */
    class Login extends BaseController
    {
    	
	    	public function index()
	    {
	        helper(['form']);
	        echo view('deskapp/auth/login');
	    } 

	    public function auth()
	    {
	        $session = session();
	        $model = new UserModel();
	        $username = $this->request->getPost('email'); // change the name of the varble $nkjjkk
	        $password = $this->request->getPost('password');// the same s

			echo $username;
			echo  $password;

			
	        $data = $model->where('email', $username)->first();
	        if($data){
	            $pass = $data['password'];
	            $verify_pass = password_verify($password, $pass);
	            if($verify_pass){
	                $ses_data = [
						
                        `email`   => $data['email'],
                        `name`   => $data['name'],
                        `password` => $data['password'],
                        `rules`   => $data['rules'],
                        `department` => $data['department'],
                        `employee_No` => $data['employee_no'],
	                    'logged_in'     => TRUE

	                ];
	                $session->set($ses_data);
	                return redirect()->to('./deskapp/dashboard');
	            }else{
	                $session->setFlashdata('msg', 'Wrong Password');
	                return redirect()->to('./deskapp/login');
	            }
	        }else{
	            $session->setFlashdata('msg', 'Username not Found');
	            return redirect()->to('./deskapp/login');
	        }
	    }

	   
    }