<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Downloads extends BaseController {
	private $table="downloads";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder("downloads","date","ASC");
		$data["title"]=$this->table;
		$this->addWebsiteHeader("web/downloads",$data);
	}
}
