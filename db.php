<?php 



class Database {

	public $conn;
	public function __construct(){
		$this->conn = mysqli_connect("localhost","root","","medicine");
		/*if($this->conn){
			echo "Connected";
		}else{
			echo "Not connected";
		}*/
	}
}


$obj = new Database;





 ?>