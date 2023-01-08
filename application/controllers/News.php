<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class News extends BaseController {
	private $table="news";
	public $per_page=8;
	public $pagenation=array('8',"10","20","50","100","all");
	private $admin_url="news_admin";
	public function index()
	{
		$this->addWebsiteHeader("web/news",null);
	}

	public function news_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="news_details";
		$this->addWebsiteHeader("web/news-details",$data);
     }

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="news_details";
		$this->addWebsiteHeader("pages/news-details",$data);
	}

	public function get_news_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}

	public function news_admin(){
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

	public function load_page_content($ref){
		$this->getData($ref);
		$this->data['pagenation']=$this->pagenation;
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/dashboard_news');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function getData($ref){
		$all_data=$this->readDataWithOrder($this->table,"date","DESC");
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
	public function addNew(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->url($this->input->post("name")).date("yyyyMMddHs"));

		//echo json_encode($data);exit;
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
	public function addDefaultData(){
		$data=array(
			"title"=>$this->removeHtmlTags($this->input->post("name")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture")),
			"tags"=>$this->removeHtmlTags($this->input->post("tags")),
			"content"=>nl2br($this->input->post("details"))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("assets/images/blog/","picture")['upload_data']['file_name'];
			$data['picture']=$this->createPictureUrl("assets/images/blog/",$file_name);
		}

		return $data;
	}

	public function EditExisting(){
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
