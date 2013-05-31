
<?php 

	if (! defined('BASEPATH')) exit('No direct access allowed');

	class LoginController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
		}
		
		function index() {

			$this->load->view("LoginView");
			if (isset($_SESSION["username"])) {
				redirect("LoginView.php");
			}
		}

		function CheckValidLogin() {

			$this->load->model("LoginModel"); // load up the model
			$user = $this->LoginModel->getLoginData($this->input->post("username")); // creates a LoginModel object that has user data for the ID
			if ($user == false) {
				$this->load->view("InvalidLoginView");
				return;
			}
			if (isset($_SESSION["isEmployer"]) == true) {
				if ($_SESSION["isEmployer"] == true) {
					$password = $this->input->post("password");
					if ($password == $user->password) {
						$this->load->view("EmployerView");
						return;

					}
					else {
						$this->load->view("InvalidLoginView");
						return;
					}
				}
				else if ($_SESSION["isEmployer"] == false) {
					$password = $this->input->post("password");
					if ($password == $user->password) {
						$this->load->view("JobSeekerView");
					}
					else {
						$this->load->view("InvalidLoginView");
						return;
					}
				}
				else {
					$this->load->view("InvalidLoginView");
					return;
				}
			}
		}
		
		function SubmitJobPosting() {
			$query = $this->db->get("jobpostings");

				if ($this->input->post("jobName") != null && $this->input->post("companyName") != null &&
						$this->input->post("datePosted") != null && $this->input->post("jobDescription") != null &&
						$this->input->post("skillsRequired") != null && $this->input->post("other") != null) {
					$new_row = array("jobName" => $this->input->post("jobName"), "companyName" => $this->input->post("companyName"), "datePosted"
							=> $this->input->post("datePosted"), "jobDescription" => $this->input->post("jobDescription"), "skillsRequired" =>
							$this->input->post("skillsRequired"), "other" => $this->input->post("other"));
					$this->db->insert("jobpostings", $new_row);
					$jobposting_success = array("jobposting_success" => "Thank you! Your job posting was successfully submitted.");
					$this->load->view("EmployerView", $jobposting_success);
				}
		}
	}

?>