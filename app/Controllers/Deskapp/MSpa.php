<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * end session controller
	 */
	class MSpages extends BaseController
	{
		 public function index()
	    {
			
 		return view('deskapp/dashboard/UserPage');
		
	}
}