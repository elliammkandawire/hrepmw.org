<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Events extends BaseController {
	private $table="events";
	private $admin_url="events_admin";
	private $per_page=8;
	private $pagenation=array('8',"10","20","50","100","all");
	public function index()
	{
		$data["data"]=$this->readDataWithOrder("events","date","ASC");
		$data["title"]="events";
		$this->addWebsiteHeader("web/events",$data);
	}

	public function event_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="event_details";
		$this->addWebsiteHeader("web/event-details",$data);
	}

	public function admin_dashboard(){
		$ref=null;
		if(isset($_GET['page'])){
			$ref=$this->input->get("page");
		}
		if($this->check_if_logged_in()){
			$this->load_page_content($ref);
		}else{
			redirect("login","reflesh");
		}
	}
	public function get_item_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}
	public function load_page_content($ref){
		$this->getData($ref);
		$this->data['pagenation']=$this->pagenation;
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/dashboard_event');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function getData($ref){
		$all_data=$this->readDataWithOrder($this->table,"datetime","desc");
		$this->data['data']=array_slice($all_data, 0,$this->per_page);
		$this->data['page']=$this->per_page;
		if($ref!=null && $ref!="all"){
			$this->data['data']=array_slice($all_data, 0,$ref);
			$this->data['page']=$ref;
		}else if($ref=="all"){
			$this->data['data']=$all_data;
			$this->data['page']=$ref;
		}
	}

	public function delete($slug){
		$this->data_model->delete($this->table,"slug",$slug);
		echo true;
	}
	public function addEvent(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->url($this->input->post("title")).date("yyyyMMddHs"));

		//echo json_encode($data);exit;
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
	public function addDefaultData(){
		$data=array(
			"title"=>$this->removeHtmlTags($this->input->post("title")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture")),
			"category"=>$this->removeHtmlTags($this->input->post("category")),
			"date"=>$this->removeHtmlTags($this->input->post("date")),
			"content"=>$this->removeHtmlTags(nl2br($this->input->post("content")))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("assets/images/events/","picture")['upload_data']['file_name'];
			$data['picture']=$this->createPictureUrl("assets/images/events/",$file_name);
		}

		return $data;
	}

	public function updateEvent(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->input->post("slug"));


		//echo json_encode($data);exit;
		$this->update($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
}
