<?php
	Class Askqs extends CI_Model
	{
	 function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }
		
		function fillQs()
		{
			$this->load->database();
			$name=$this->input->post('name');
			$qs=$this->input->post('qs');
			if($name)
			{
				$ans=array(
				"name"=>$name,
				"question"=> $qs);
			}
			
			else
			{
				$ans=array(
				"question"=>$qs );
			}
			
			$this->db->insert('faq', $ans);
			$this->db->where('question',$qs);
			$id=$this->db->get('faq');
			return $id;
		}
	}
?>
