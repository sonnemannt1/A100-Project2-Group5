<?php

	class LoginModel extends CI_Model {

		var $jobSeekerID = "";

		var $user = "";
		var $password = "";
		var $firstName = "";
		var $lastName = "";
		var $address = "";
		var $city = "";
		var $state = "";
		var $zip = "";
		var $emailaddress = "";
		var $telephone = "";

		
		public function getLoginData($user) {
			session_start();
			//This line is causing me major problems
			//Still trying to figure out why it is not working properly -Tom
			$query = $this->db->get_where("jobseeker",array("username" => $user)); // grab the username from the database
			if ($query != null) { // check if it exists
				$user_data = $query->row();
				if ($query->num_rows() == 1) {
					// user was found
					$_SESSION["isEmployer"] = false;
					$_SESSION["jobseekerID"] = $user_data->jobseekerID;
					$_SESSION["username"] = $user_data->username;
					$this->jobseekerID = $user_data->jobseekerID;
					$this->employerID = null;
					$this->user = $user_data->username;
					$this->password = $user_data->password;

					return $this;
				}
				else {
					// check employer table
					$query = $this->db->get_where("employerlogin", array("username" => $user));
					$user_data = $query->row();
					if ($query->num_rows() == 1) {
						$_SESSION["isEmployer"] = true;
						$_SESSION["username"] = $user_data->username;
						$this->jobseekerID = null;
						$this->employerID = $user_data->employerID;
						$this->user = $user_data->username;
						$this->password = $user_data->password;
						$this->contactEmail = $user_data->contactEmail;
						$this->companyName = $user_data->companyName;
						return $this;
					}
				}
				return false;
			}
		} 
		
	}

?>