<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Vacancies extends BaseController {
	private $table="vacancies";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"date","ASC");
		$data["title"]=$this->table;
		$this->addWebsiteHeader("web/vacancies",$data);
	}

	public function vacancy_details($slug){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="vacancies_details";
		$this->addWebsiteHeader("web/vacancies-details",$data);
	}
}
