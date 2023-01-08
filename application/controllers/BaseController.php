<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('data_model');
	}
	public function addWebsiteHeader($page,$additional_data)
	{
		$data["company_data"]=($this->data_model->company_data()[0]);
		$data["programs"]=$this->data_model->readData("our_activities");
		$data["staff"]=$this->data_model->readDataWithOrder("staff","display_position","ASC");
		$data["partners"]=$this->data_model->readData("partners");

		if (!empty($this->data_model->getHeader($this->getPageName($page)))) {
			$data["header"]=$this->data_model->getHeader($this->getPageName($page))[0];
		}

		$data[$additional_data["title"]]=$additional_data["data"];
		$data["events_latest"]=$this->data_model->readTopRandomly("events",3);
		$data["sliders"]=$this->data_model->readSliders("sliders");
		$data["news"]=$this->data_model->paginated("news",0,20);
		$data["latest_news"]=$this->data_model->readTopRandomly("news",4);
		$data["random_vacancies"]=$this->data_model->readTopRandomly("vacancies",4);
		$data["moh_announcements"]=$this->data_model->readTop("moh_announcements",2);
		$data["latest_downloads"]=$this->data_model->readTop("downloads",4);
		$data["latest_publications"]=$this->data_model->readTop("publications",2);
		$data["features"]=$this->data_model->readTop("feature",4);
		$data[$additional_data["title"]]=$additional_data["data"];

        
        $this->load->view('web/header',$data);
		$this->load->view($page);
		$this->load->view('web/footer-without-social');
	}

	public function getPageName($page){
		$data=explode("/",$page);
		return $data[count($data)-1];
	}

	public function checkIfLoggedIn(){
		if(!isset($_SESSION['logged_in'])){
			redirect("login");
		}
	}

	public function addDashboardHeaderAndFooterAndMenu($page, $additional_data){
		$this->checkIfLoggedIn();
		$data[$additional_data["title"]]=$additional_data["data"];
		$data["company_data"]=($this->data_model->company_data()[0]);
		$this->load->view('dashboard/dashboard_header',$data);
		$this->load->view($page);
		$this->load->view('dashboard/dashboard_footer');
		if($page=="dashboard/update_company_details"){
			$this->load->view('dashboard/special_footer');
		}
	}

	public function check_if_logged_in(){
		if($_SESSION['logged_in']){
			return true;
		}else{
			return false;
		}
	}

	public function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

	public function createPictureUrl($location,$filename){
		return base_url().$location.$filename;
	}

	public function no_of_pages($table, $size){
		return $this->data_model->no_of_pages($table, $this->clean($size));
	}

	public function new_paginated($table_name, $page, $size){
		return json_decode($this->data_model->paginated($table_name, $page*$this->clean($size), $this->clean($size)));
	}

	public function url($url)
	{
		$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
		$url = trim($url, "-");
		$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
		$url = strtolower($url);
		$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
		return $url;
	}

	public function readSingle($table, $column_name, $column_value){
		return $this->data_model->get_details($table, $column_name, $this->clean($column_value))[0];
	}

	public function paginated($page, $url, $size){
		return json_decode($this->data_model->getPagenated(API_URL.$url, $page, $size));
	}
	public function insert($table,$data){
		$this->data_model->insert($table, $data);
	}

	public function get_details($table_name,$column_name, $column_value){
		return $this->data_model->get_details($table_name,$column_name, $column_value);
	}
	public function readData($table){
		return $this->data_model->readData($table);
	}
	public function  update($table,$data){
		$this->data_model->update($table, $data);
	}
	function removeHtmlTags($string){
		return strip_tags($string);
	}
	public function readDataWithOrder($table_name, $order_by, $order_value){
		return $this->data_model->readDataWithOrder($table_name, $order_by, $order_value);
	}

	public function do_upload($location,$file)
	{
		$config['upload_path']          = $location;
		$config['allowed_types']        = 'pdf|gif|jpg|png|jpeg|mp3|mpeg|doc|docx';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1600;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($file))
		{
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return $data;
		}
	}
}
