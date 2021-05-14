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
	
	// function setMerk($x)
	// {
	// 	$this -> merk = $x;
	// }

	// function setJumlahRoda($x)
	// {
	// 	$this -> jumlahroda = $x;
	// }

	// function setHarga($x)
	// {
	// 	$this -> harga = $x;
	// }

	// function setWarna($x)
	// {
	// 	$this -> warna = $x;
	// }

	// function setBahanBakar($x)
	// {
	// 	$this -> bahanbakar = $x;
	// }

	// function setTahunPembuatan($x)
	// {
	// 	$this -> tahunpembuatan = $x;
	// }
}
	$kendaraan2 = new kendaraan();
	$kendaraan2 -> merk='Toyota Yaris';
	$kendaraan2 -> jumlahroda='4';
	$kendaraan2 -> harga='160000000';
	$kendaraan2 -> warna='Merah';
	$kendaraan2 -> bahanbakar='Premium';
	$kendaraan2 -> tahunpembuatan='2001';
	echo 'Harga terbaru dari '.$kendaraan2 ->merk.' beroda '.$kendaraan2 ->jumlahroda.' berwarna '.$kendaraan2 ->warna.' berbahan bakar '.$kendaraan2 ->bahanbakar.' adalah Rp. '.$kendaraan2->harga.' dengan tahun pembuatan '.$kendaraan2 ->tahunpembuatan.', sehingga harganya '.$kendaraan2 -> statusHarga();
	echo "<br/>";
	echo 'Sedangkan harga second sebesar Rp. '.$kendaraan2 -> hargaSecond();
	echo "<br/>";
	echo 'untuk subsidi, kendaraan ini '.$kendaraan2 -> dapatSubsidi();
	echo "<br/>";
	echo "<p/>";

	$kendaraan3 = new kendaraan();
	$kendaraan3 -> merk='Honda Scoopy';
	$kendaraan3 -> jumlahroda='2';
	$kendaraan3 -> harga='13000000';
	$kendaraan3 -> warna='Putih';
	$kendaraan3 -> bahanbakar='Premium';
	$kendaraan3 -> tahunpembuatan='2011';
	echo 'Harga terbaru dari '.$kendaraan3 ->merk.' beroda '.$kendaraan3 ->jumlahroda.' berwarna '.$kendaraan3 ->warna.' berbahan bakar '.$kendaraan2 ->bahanbakar.' adalah Rp. '.$kendaraan2->harga.' dengan tahun pembuatan '.$kendaraan3 ->tahunpembuatan.', sehingga harganya '.$kendaraan3 -> statusHarga();
	echo "<br/>";
	echo 'Sedangkan harga second sebesar Rp. '.$kendaraan3 -> hargaSecond();
	echo "<br/>";
	echo 'untuk subsidi, kendaraan ini '.$kendaraan3 -> dapatSubsidi();
	echo "<br/>";
	echo "<p/>";

	$kendaraan4 = new kendaraan();
	$kendaraan4 -> merk='Isuzu Panther';
	$kendaraan4 -> jumlahroda='4';
	$kendaraan4 -> harga='170000000';
	$kendaraan4 -> warna='Hitam';
	$kendaraan4 -> bahanbakar='Solar';
	$kendaraan4 -> tahunpembuatan='2007';
	echo 'Harga terbaru dari '.$kendaraan4 ->merk.' beroda '.$kendaraan4 ->jumlahroda.' berwarna '.$kendaraan4 ->warna.' berbahan bakar '.$kendaraan4 ->bahanbakar.' adalah Rp. '.$kendaraan4->harga.' dengan tahun pembuatan '.$kendaraan4 ->tahunpembuatan.', sehingga harganya '.$kendaraan4 -> statusHarga();
	echo "<br/>";
	echo 'Sedangkan harga second sebesar Rp. '.$kendaraan4 -> hargaSecond();
	echo "<br/>";
	echo 'untuk subsidi, kendaraan ini '.$kendaraan4 -> dapatSubsidi();
	echo "<br/>";
	echo "<p/>";

?>
