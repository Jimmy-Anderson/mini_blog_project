<?php 
class Loginmodel extends CI_Model{

	public function login_valid  ($username,$password){
		$q= $this->db
					//->where('username',$username)	
					//->where('password',$password) 
					// <or>
		->where(['uname'=>$username,'pword'=>$password])
					//->from('users') 
					// <or>
					->get('users');
		//query generated by any of these combination of functions
		// select * from users where username =$username and passowrd =$password			
		if($q->num_rows()){
			return $q->row()->id;
		}
		else{
			return FALSE;
		}
	}
	 
}

 ?>