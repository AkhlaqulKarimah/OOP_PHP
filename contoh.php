<?php
include 'class_kendaraan.php';

	$kendaraan1 = new kendaraan('Yamaha Mio', 10000000);

	echo 'Harga dari '.$kendaraan1->bacaMerk().' adalah Rp. '.$kendaraan1->bacaHarga();

?>