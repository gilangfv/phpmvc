<?php 

class Home extends Controller {
	public function index(){
		 
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
		 
	}
}

 ?>