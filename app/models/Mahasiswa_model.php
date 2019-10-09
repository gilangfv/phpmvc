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


	private $dbh;
	private $stmt;

	public function __construct(){
		$dsn = 'mysql:host=localhost;dbname=phpmvc';
		try{
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function getAllMahasiswa(){
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
	}
}

 ?>