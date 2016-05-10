<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//session_start();
class Faq extends CI_Controller {

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
			redirect('admin', 'refresh');
		}
	 }
	 function openAll()
	 {
		$this->load->model('answer');
		$data=$this->answer->getData();
		$r=array("result"=>$data);
		$this->load->view('questions',$r);
	  }
	  function openOne($data)
		{
				
			$this->load->model('answer');
			$q=$this->answer->getOne($data);
			$q=$q[0];
			$this->load->view('singleQuestion',$q);
		}
		function answer($id)
		{
			$this->load->model('answer');
				$this->answer->writeAnswer($id);
				redirect('faq/openAll','refresh');
		}
		function delete($id)
		{
			$this->load->model('answer');
			$this->answer->deleteAnswer($id);
			redirect('Faq/openAll','refresh');
		}

		function deleteAnswer($id)
		{
			$this->load->model('answer');
			$this->answer->deleteAnswer($id);
			redirect('Faq/edit','refresh');
		}

		function removeAnswer($id)
		{
			$this->load->model('answer');
			$this->answer->removeAnswer($id);
			redirect('Faq/edit','refresh');

		}


		function edit()
		{
			$this->load->model('answer');
			$session_data = $this->session->userdata('logged_in');
			$ans=$this->answer->showAnswered($session_data['username']);
			$r=array("result"=>$ans);
			$this->load->view("editAnswer",$r);
		}

		function viewOne($id)
		{
			$this->load->model('answer');
			$q=$this->answer->getOne($id);
			$q=$q[0];
			$this->load->view('changeAnswer',$q);		
		}

		function changeAnswer($id)
		{
			$this->load->model('answer');
				$this->answer->writeAnswer($id);
				redirect('Faq/edit','refresh');
		}
 }
 ?>
	