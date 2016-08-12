<?php 
//
//session_start();
class adminPanel extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->helper('url');
	if($this->session->userdata('logged_in'))
    {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $data['id']=$session_data['id'];
  //   $this->load->view('home_view', $data);
    }
    else
    {
		//If no session, redirect to login page
        redirect('Admin', 'refresh');
    }
 }
 function index()
 {
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['id']=$session_data['id'];
	$this->load->view('adminHome',$data);
	
 }
 function logout()
 {
	   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Admin', 'refresh');
}

function change()
	{
		if($this->session->userdata('logged_in'))
				{
					 $session_data = $this->session->userdata('logged_in');
					 $data['username'] = $session_data['username'];
					 $data['id']=$session_data['id'];
					// $this->load->view('home_view', $data);
					 $data['msg']="";
						$this->load->view('changePassword',$data);
				}
			  else
			   {
				 //If no session, redirect to login page
				 redirect('Admin', 'refresh');
			   }
	}

	function changePass()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['id']=$session_data['id'];
		$this->load->model('change');
		$res=$this->change->passwordChange($data);
		if($res)
		{
			$this->load->view('passwordChanged',$data);

		}
		else
		{
			$data['msg']="Passwords don't match";
			$this->load->view('changePassword',$data);
		}
	}

	
}
?>
 