<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
	$this->load->database();
   $this -> db -> select( 'username, password,userId');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password',$password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();
	/*
foreach ($query->result() as $row)
{
   echo $row->club_id;
   echo $row->password;
   echo $row->id;
   die();
}*/
   if($query -> num_rows() == 1)
   {
//	echo "abc";
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>