<?php
include 'encapsulationPrivate.php';

	$kendaraan1 = new kendaraan('Yamaha Mio', 10000000);

	echo 'Status Harga : '.$kendaraan1->statusHarga();

?>