<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Announcements extends BaseController {
	private $table="publications";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"date","ASC");
		$data["title"]="announcements";
		$this->addWebsiteHeader("web/announcements",$data);
	}

	public function announcements_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="announcements_details";
		$this->addWebsiteHeader("web/announcements-details",$data);
	}
}
