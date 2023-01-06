<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Gallery extends BaseController {
	private $table="gallery";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"date","ASC");
		$data["title"]=$this->table;
		$this->addWebsiteHeader("web/gallery",$data);
	}
}
