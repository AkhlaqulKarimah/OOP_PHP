<?php
include 'databaseFIX.php';

//parameter koneksi mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'test';

//intantitasi dan setting properties obyek database
$db = new database($host, $user, $pass, $mydb);

//koneksi ke mysql via method
$db->connectMySQL();
?>