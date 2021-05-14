<?php
include 'inheritance.php';

	$kereta1 = new keretaApi('KA Lokomotif', 15000000);
	$kereta1 -> setGerbong(20);
	echo 'Jumlah Gerbong dari '.$kereta1->bacaMerk().' yang seharga '.$kereta1->bacaHarga().' adalah '.$kereta1->bacaGerbong();

?>