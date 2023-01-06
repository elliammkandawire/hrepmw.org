<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Partners extends BaseController {
	private $table="partners";

	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"date","ASC");
		$data["title"]=$this->table;
		$this->addWebsiteHeader("web/partners",$data);
	}
	public function program_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="partners_details";
		$this->addWebsiteHeader("web/partners-details",$data);
	}
}
