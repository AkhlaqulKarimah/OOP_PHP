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

	function setJumlahRoda($x)
	{
		$this -> jumlahroda = $x;
	}

	function setHarga($x)
	{
		$this -> harga = $x;
	}

	function setWarna($x)
	{
		$this -> warna = $x;
	}

	function setBahanBakar($x)
	{
		$this -> bahanbakar = $x;
	}
}
	$kendaraan2 = new kendaraan();
	$kendaraan2 -> setMerk('Toyota Yaris');
	$kendaraan2 -> setJumlahRoda('4');
	$kendaraan2 -> setHarga('160000000');
	$kendaraan2 -> setWarna('Merah');
	$kendaraan2 -> setBahanBakar('Premium');
	echo 'Harga dari '.$kendaraan2 ->merk.' beroda '.$kendaraan2 ->jumlahroda.' berwarna '.$kendaraan2 ->warna.' berbahan bakar '.$kendaraan2 ->bahanbakar.' adalah Rp. '.$kendaraan2->harga;
	echo "<br/>";

	$kendaraan3 = new kendaraan();
	$kendaraan3 -> setMerk('Honda Scoopy');
	$kendaraan3 -> setJumlahRoda('2');
	$kendaraan3 -> setHarga('13000000');
	$kendaraan3 -> setWarna('Putih');
	$kendaraan3 -> setBahanBakar('Premium');
	echo 'Harga dari '.$kendaraan3 ->merk.' beroda '.$kendaraan3 ->jumlahroda.' berwarna '.$kendaraan3 ->warna.' berbahan bakar '.$kendaraan3 ->bahanbakar.' adalah Rp. '.$kendaraan3->harga;
	echo "<br/>";

	$kendaraan4 = new kendaraan();
	$kendaraan4 -> setMerk('Isuzu Panther');
	$kendaraan4 -> setJumlahRoda('4');
	$kendaraan4 -> setHarga('170000000');
	$kendaraan4 -> setWarna('Hitam');
	$kendaraan4 -> setBahanBakar('Solar');
	echo 'Harga dari '.$kendaraan4 ->merk.' beroda '.$kendaraan4 ->jumlahroda.' berwarna '.$kendaraan4 ->warna.' berbahan bakar '.$kendaraan4 ->bahanbakar.' adalah Rp. '.$kendaraan4->harga;
	echo "<br/>";

?>