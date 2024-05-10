<?php

class UserModel extends CI_Model
{
	public function getUserData()
	{
		// $this->load->database();
		// $q = $this->db->query("select * from users");
		$q = $this->db->select('firstname,role')->where("id",1)->get("users");
		return $q->result();
	    // return [
		// 	['firstname' => "Kajal Katariya",'role' => "Laravel Developer"],
		// 	['firstname' => "Komal Katariya",'role' => "Web Science"],
		// ];
	}
}

?>
