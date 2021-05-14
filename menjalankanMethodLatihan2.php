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

	function dapatSubsidi()
	{
		if ($this ->bahanbakar = 'Premium' && $this ->tahunpembuatan < 2005) $subsidi = 'Ya dapat';
		else $subsidi = 'Tidak dapat';
		return $subsidi;
	}

	function hargaSecond()
	{
		if ($this ->tahunpembuatan < 2005) $second = $this ->harga * 20/100;
		else if ($this ->tahunpembuatan >= 2005 and $this ->tahunpembuatan <= 2010) $second = $this ->harga * 30/100;
		else $second = $this ->harga * 40/100;
		return $second;
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

	function setTahunPembuatan($x)
	{
		$this -> tahunpembuatan = $x;
	}
}
	$kendaraan2 = new kendaraan();
	$kendaraan2 -> setMerk('Toyota Yaris');
	$kendaraan2 -> setJumlahRoda('4');
	$kendaraan2 -> setHarga('160000000');
	$kendaraan2 -> setWarna('Merah');
	$kendaraan2 -> setBahanBakar('Premium');
	$kendaraan2 -> setTahunPembuatan('2001');
	echo 'Harga terbaru dari '.$kendaraan2 ->merk.' beroda '.$kendaraan2 ->jumlahroda.' berwarna '.$kendaraan2 ->warna.' berbahan bakar '.$kendaraan2 ->bahanbakar.' adalah Rp. '.$kendaraan2->harga.' dengan tahun pembuatan '.$kendaraan2 ->tahunpembuatan;
	echo "<br/>";
	echo 'Sedangkan harga second sebesar '.$kendaraan2 -> hargaSecond();
	echo "<br/>";
	echo 'untuk subsidi, kendaraan ini '.$kendaraan2 -> dapatSubsidi();
	echo "<br/>";
	echo "<p/>";

?>