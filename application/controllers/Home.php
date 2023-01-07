<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Home extends BaseController {
	private $table="company";
	public function index()
	{
		$this->addWebsiteHeader("web/index",null);
	}
	public function dashboard(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/dashboard', null);
	}
	public function update_company_details(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/update_company_details', null);
	}


	public function update_company(){
		$this->checkIfLoggedIn();
		$data=array(
			"slug"=>$this->input->post("slug"),
			"shortname"=>$this->input->post("shortname"),
			"fullname"=>$this->input->post("fullname"),
			"motto"=>nl2br($this->input->post("motto")),
			"youtube"=>$this->input->post("youtube"),
			"location"=>$this->input->post("location"),
			"email"=>$this->input->post("email"),
			"phone"=>$this->input->post("phone"),
			"facebook"=>$this->input->post("facebook"),
			"instagram"=>nl2br($this->input->post("instagram")),
			"twitter"=>$this->input->post("twitter"),
			"postal_address"=>nl2br($this->input->post("postal_address")),
			"map_src"=>$this->input->post("map_src"),
			"logo"=>$this->input->post("current_logo"),
			"about_picture"=>$this->input->post("current_about_picture"),
			"home_about_picture"=>$this->input->post("current_home_about_picture"),
			"background"=>nl2br($this->input->post("background")),
			"short_aboutus"=>nl2br($this->input->post("short_aboutus")),
			"goal"=>nl2br($this->input->post("goal")),
			"preview_video"=>nl2br($this->input->post("preview_video")),
			"mission"=>$this->input->post("mission"),
			"vision"=>nl2br($this->input->post("vision"))
		);
		/*check if logo is empty*/
		if ($_FILES['logo']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/resources","logo")['upload_data']['file_name'];
			$data['logo']=base_url()."assets/images/resources/".$file_name;
		}

		/*check if about picture is empty*/
		if ($_FILES['about_picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","about_picture")['upload_data']['file_name'];
			$data['about_picture']=base_url()."assets/images/resources/".$file_name;
		}

		/*check if home about picture is empty*/
		if ($_FILES['home_about_picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","home_about_picture")['upload_data']['file_name'];
			$data['home_about_picture']=base_url()."assets/images/resources/".$file_name;
		}


		/*check if Program  is empty*/
//		if ($_FILES['programs_header']['error']!=4) {
//			$file_name=$this->do_upload("./assets/images/backgrounds","programs_header")['upload_data']['file_name'];
//			$data['programs_header']=$file_name;
//		}


		/*check if Events  is empty*/
//		if ($_FILES['events_header']['error']!=4) {
//			$file_name=$this->do_upload("./assets/images/backgrounds","events_header")['upload_data']['file_name'];
//			$data['events_header']=$file_name;
//		}


		/*check if Contact  is empty*/
//		if ($_FILES['contact_header']['error']!=4) {
//			$file_name=$this->do_upload("./assets/images/backgrounds","contact_header")['upload_data']['file_name'];
//			$data['contact_header']=$file_name;
//		}


		$this->update($this->table,$data);
		$_SESSION['message']="Record inserted successfully";
		redirect("dashboard");
	}

}
