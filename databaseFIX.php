<?php
class database
{
	//properties
	private $dbHost;
	private $dbUser;
	private $dbPass;
	private $dbName;

	//constructor
	function __construct($a, $b, $c, $d)
	{
		$this ->dbHost = $a;
		$this ->dbUser = $b;
		$this ->dbPass = $c;
		$this ->dbName = $d;
	}

	//method koneksi mysql
	function connectMySQL()
	{
		$cek = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
		if ($cek) {
			echo "Database terkoneksi";
		}else {
			echo "Database gagal terkoneksi";	
		}
		
	}
}
?>