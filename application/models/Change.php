<?php
Class Change extends CI_Model
{
	function passwordChange($data)
	{
		$this->load->database();
		$pass1=$this->input->post('passwordNew');
		$pass2=$this->input->post('passwordConfirm');
		$arr = array('password' =>$pass1 , );

		if($pass1==$pass2)
		{
			$this->db->where('userId',$data['id']);
			$this->db->update('users',$arr);
			return true;
		}
		else
			return false;

	}
}
 ?>