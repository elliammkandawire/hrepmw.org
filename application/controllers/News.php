<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class News extends BaseController {
	private $table="news";
	public function index()
	{
		$this->addWebsiteHeader("web/news",null);
	}

	public function news_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="news_details";
		$this->addWebsiteHeader("web/news-details",$data);
     }
}
