<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Program extends BaseController {
	private $table="our_activities";

	public function program_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="program_details";
		$this->addWebsiteHeader("web/program-details",$data);
	}
}
