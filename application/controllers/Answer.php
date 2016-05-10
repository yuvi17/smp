<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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