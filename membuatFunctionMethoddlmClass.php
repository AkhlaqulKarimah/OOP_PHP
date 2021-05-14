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
		if ($this ->tahunpembuatan > 2005) $second = $this ->harga * 20/100;
		else if ($this ->tahunpembuatan >= 2005) $second = $this ->harga * 30/100;
		else $second = $this ->harga * 40/100;
		return $second;
	}
}
?>