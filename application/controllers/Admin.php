<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	Class Admin extends CI_Controller
	{
		function __construct()
		{
		//	$this->load->helper('url');
			parent:: __construct();
		}
		function index()
		{
			
			
			$this->load->view('adminLogin');
		}
	}

?>