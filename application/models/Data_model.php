<?php
class Data_model extends CI_Model {
	private $table="company";
	function __construct(){
		parent::__construct();
	}

	public function getFromEndpoint($url)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}
	public function getPagenated($url,$page, $size){
		// set post fields
		$post = [
			'currentPage' => $page,
			'recordsPerPage' => $size
		];


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_POSTFIELDS => json_encode($post),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}

	public function company_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function update($table,$data){
		$this->db->replace($table,$data);
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function delete($table,$column_name, $colum_value){
		$this->db->where($column_name, $colum_value);
		$this->db->delete($table);
	}

	public function get_details($table_name,$column_name, $column_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where($column_name, $column_value);
		return $this->db->get()->result();
	}

	public function getHeader($endpoint){
		$this->db->select("*");
		$this->db->from("headers");
		$this->db->where("menu_name", $endpoint);
		$this->db->where("status", true);
		return $this->db->get()->result();
	}

	public function paginated($table_name, $offset, $size){
		$sql="Select * from $table_name ORDER BY date DESC LIMIT $offset, $size";
		$this->db->order_by("date", "DESC");
		$this->db->where("status", true);
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function no_of_pages($table_name, $size){
		$sql="SELECT CEILING(count(*)/$size) as pages FROM $table_name";
		$query = $this->db->query($sql);
		return json_encode($query->result_array());
	}

	public function selectFewElements($table_name,$order_column_name, $order_column_value, $size){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by($order_column_name, $order_column_value);
		$this->db->limit($size);
		return $this->db->get()->result();
	}

	public function getNextOrPrev($table_name,$column_name, $column_value,$order_by, $order_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where("$column_name >", $column_value);
		$this->db->order_by($order_by, $order_value);
		return $this->db->get()->result();
	}

	public function readDataWithOrder($table_name, $order_by, $order_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by($order_by, $order_value);
		$this->db->where("status", true);
		return $this->db->get()->result();
	}
	public function readData($table_name){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by("date", "DESC");
		$this->db->where("status", true);
		return $this->db->get()->result();
	}

	public function readSliders($table_name){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by("position", "ASC");
		$this->db->where("status", true);
		return $this->db->get()->result();
	}

	public function readTop($table_name,$limit){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->limit($limit);
		$this->db->order_by("date", "DESC");
		$this->db->where("status", true);
		return $this->db->get()->result();
	}

	public function readTopRandomly($table_name,$limit){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->limit($limit);
		$this->db->order_by('rand()');
		$this->db->where("status", true);
		return $this->db->get()->result();
	}


}
