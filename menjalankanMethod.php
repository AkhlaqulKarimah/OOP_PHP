<?php
class kendaraan {
	var $jumlahroda;
	var $warna;
	var $bahanbakar;
	var $harga;
	var $merk;

	function statusHarga()
	{
		if ($this -> harga > 50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}

	function setMerk($x)
	{
		$this -> merk = $x;
	}

	function setHarga($x)
	{
		$this -> harga = $x;
	}

}
	$kendaraan1 = new kendaraan();
	$kendaraan1 -> setMerk('Yamaha Mio');
	$kendaraan1 -> setHarga('10000000');
	echo $kendaraan1 -> statusHarga();
?>