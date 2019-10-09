<?php 

class Mahasiswa_model{
	// private $mhs = [
	// 	[
	// 	"nama" => "gilang",
	// 	"nrp" => "173040042",
	// 	"email" => "gilangf@yahoo.com",
	// 	"jurusan" => "TIF"
	// 	],

	// 	[
	// 	"nama" => "iteung",
	// 	"nrp" => "173040044",
	// 	"email" => "ieuae@yahoo.com",
	// 	"jurusan" => "TEKPANG"
	// 	],

	// 	[
	// 	"nama" => "adit",
	// 	"nrp" => "173040041",
	// 	"email" => "adits@yahoo.com",
	// 	"jurusan" => "TIF"
	// 	]

	// ];


	private $table ='mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}
	

	public function getAllMahasiswa(){
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id){
		$this->db->query('SELECT * FROM '.$this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
}