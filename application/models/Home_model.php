<?php
class Home_model extends CI_Model {
	private $table="company";
	function __construct(){
		parent::__construct();
	}
	public function company_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->get()->result();
	}
}
?>
