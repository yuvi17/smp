<?php
	Class Answer extends CI_Model
	{
	 function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
		function getData()
		{
			$this-> load-> database();
			$this ->db -> select('question,Id,name');
			$this ->db ->where('answered',0);
			
			
			$data = $this ->db->get('faq');
			//$$data->result());
			///die(); 
			if($data -> num_rows() >0)
			{
				return $data->result_array();
			}
			else
				return false;
		}
		
		function getOne($id)
		{
			$this->load->database();
			$this->db->where('Id',$id);
			$q=$this->db->get('faq');
				return $q->result_array();
		}
		function writeAnswer($id){
			 $session_data = $this->session->userdata('logged_in');
			$name=$session_data['username'];
			$ans=array(
			'username'=>$name,
			'answer'=>$this->input->post('answer'),
			'answered'=>TRUE
			);
			$this->db->where('Id',$id);
			return $this->db->update('faq', $ans);
		
		}
		function deleteAnswer($id)
		{
			$this->db->delete('faq', array('Id' => $id)); 
		}

		function showAnswered($username)
		{
			$this->db->where('username',$username);
			$r=$this->db->get('faq');
			return $r->result_array();
			$this->load->view('editAnswer',$r);
		}

		function removeAnswer($id)
		{
			$this->db->where('Id',$id);
			$this->db->set('answered',0);
			$this->db->set('username',"");
			$this->db->update('faq');
		}

	}
?>