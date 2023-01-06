<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Events extends BaseController {
	private $table="events";
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
}
