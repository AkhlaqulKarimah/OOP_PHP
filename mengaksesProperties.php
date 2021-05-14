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

	function bacaMerk()
	{
		return $this ->merk;
	}

	function bacaHarga()
	{
		return $this ->harga;
	}

}
	$kendaraan2 = new kendaraan();
	$kendaraan2 -> setMerk('Toyota Yaris');
	$kendaraan2 -> setHarga('160000000');
	echo 'Kendaraan '."<b>".$kendaraan2 ->bacaMerk()."</b>".' adalah Rp. '."<b>".$kendaraan2->bacaHarga()."</b>";
	echo "<p/>";

?>