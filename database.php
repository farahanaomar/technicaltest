<?php
class database{
	//db paramaters
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'webinar_shopee';
	private $conn;
	
	//db connect
	public function connect(){
		$this->conn = null;
		
		try{
			$this->conn = new PDO(
			'mysql:host='. $this->host. 
			';dbname='. $this->db_name, 
			$this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			echo 'Connection failed: '.$e->getMessage();
		}
		return $this->conn;
	}
}


?>