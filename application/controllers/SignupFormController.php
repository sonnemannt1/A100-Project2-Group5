<?php 

	if (! defined('BASEPATH')) exit('No direct access allowed');

	class LoginController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
		}
		
		function index() {

			$this->load->view("SignupFormView");
			if (isset($_SESSION["username"])) {
				redirect("SignupFormView.php");
			}
		}
		
		function SubmitJobPosting() {
			$query = $this->db->get("jobpostings");

				if ($this->input->post("jobName") != null && $this->input->post("companyName") != null &&
						$this->input->post("datePosted") != null && $this->input->post("jobDescription") != null &&
						$this->input->post("skillsRequired") != null && $this->input->post("other") != null && $this->input->post("contactEmail") != null && $this->input->post("companySite") != null) {
					$new_row = array("jobName" => $this->input->post("jobName"), "companyName" => $this->input->post("companyName"), "datePosted"
							=> $this->input->post("datePosted"), "jobDescription" => $this->input->post("jobDescription"), "skillsRequired" =>
							$this->input->post("skillsRequired"), "other" => $this->input->post("other"), "contactEmail" => $this->input->post("contactEmail"), "companySite" => $this->input->post("companySite"));
					$this->db->insert("jobpostings", $new_row);
					$jobposting_success = array("jobposting_success" => "Thank you! Your job posting was successfully submitted.");
					$this->load->view("LoginView");
				}
		}
		
		function SubmitJobSeeker() {
				
			$f_name = $this->input->post("firstName");
			$l_name = $this->input->post("lastName");
			$email = $this->input->post("emailAddress");
			$address = $this->input->post("address");
			$city = $this->input->post("city");
			$state = $this->input->post("state");
			$zip = $this->input->post("zip");
			$phone = $this->input->post("telephone");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$confirmPassword = $this->input->post("confirmPassword");
			$insert = array("firstName" => $f_name, "lastName" => $l_name, "emailAddress" => $email, "city" => $city, "state" => $state, "zip" => $zip, "telephone" => $phone, "username" => $username, "password" => $password);
			if ($password != $confirmPassword){
				
			}
			else{
			$this->db->insert("jobseeker", $insert);
			$this->load->view("LoginView");
		}
	}
	function SubmitJobPoster() {
	
		$name = $this->input->post("companyName");
		$email = $this->input->post("contactEmail");
		$address = $this->input->post("address");
		$city = $this->input->post("city");
		$state = $this->input->post("state");
		$zip = $this->input->post("zip");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$confirmPassword = $this->input->post("confirmPassword");
		$insert = array("companyName" => $name,"contactEmail" => $email, "address"=>$address, "city" => $city, "state" => $state, "zip" => $zip,"username" => $username, "password" => $password);
		if ($password != $confirmPassword){
	
		}
		else{
			$this->db->insert("employerlogin", $insert);
			$this->load->view("LoginView");
		}
	}
	}

?>