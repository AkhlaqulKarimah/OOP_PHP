<?php
class kendaraan {
	var $jumlahroda;
	var $warna;
	var $bahanbakar;
	var $harga;
	var $merk;
	var $tahunpembuatan;

	function statusHarga()
	{
		if ($this -> harga > 50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}
}
	$kendaraan1 = new kendaraan();
	$kendaraan2 = new kendaraan;
	$kendaraan3 = new kendaraan();
?>