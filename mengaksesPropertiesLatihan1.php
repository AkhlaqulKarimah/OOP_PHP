<?php
class kendaraan {
	var $jumlahroda;
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

	function setBahanBakar($x)
	{
		$this -> bahanbakar = $x;
	}

	function bacaMerk()
	{
		return $this ->merk;
	}

	function bacaJumlahRoda()
	{
		return $this ->jumlahroda;
	}

	function bacaHarga()
	{
		return $this ->harga;
	}

	function bacaBahanBakar()
	{
		return $this ->bahanbakar;
	}

}
	$kendaraan2 = new kendaraan();
	$kendaraan2 -> setMerk('Toyota Yaris');
	$kendaraan2 -> setJumlahRoda('4');
	$kendaraan2 -> setBahanBakar('Premium');
	$kendaraan2 -> setHarga('160000000');
	echo 'Kendaraan '."<b>".$kendaraan2 ->bacaMerk()."</b>".', memiliki '."<b>".$kendaraan2->bacaJumlahRoda()."</b>".' roda,'.' berbahan bakar '."<b>".$kendaraan2->bacaBahanBakar()."</b>".' dan harganya Rp. '."<b>".$kendaraan2->bacaHarga()."</b>";
	echo "<p/>";

	$kendaraan3 = new kendaraan();
	$kendaraan3 -> setMerk('Honda Scoopy');
	$kendaraan3 -> setJumlahRoda('2');
	$kendaraan3 -> setBahanBakar('Premium');
	$kendaraan3 -> setHarga('13000000');
	echo 'Kendaraan '."<b>".$kendaraan3 ->bacaMerk()."</b>".', memiliki '."<b>".$kendaraan3->bacaJumlahRoda()."</b>".' roda,'.' berbahan bakar '."<b>".$kendaraan3->bacaBahanBakar()."</b>".' dan harganya Rp. '."<b>".$kendaraan3->bacaHarga()."</b>";
	echo "<p/>";

	$kendaraan4 = new kendaraan();
	$kendaraan4 -> setMerk('Isuzu Panther');
	$kendaraan4 -> setJumlahRoda('4');
	$kendaraan4 -> setBahanBakar('Solar');
	$kendaraan4 -> setHarga('170000000');
	echo 'Kendaraan '."<b>".$kendaraan4 ->bacaMerk()."</b>".', memiliki '."<b>".$kendaraan4->bacaJumlahRoda()."</b>".' roda,'.' berbahan bakar '."<b>".$kendaraan4->bacaBahanBakar()."</b>".' dan harganya Rp. '."<b>".$kendaraan4->bacaHarga()."</b>";
	echo "<p/>";


?>