<?php
class kendaraan {
	protected $jumlahroda;
	public $warna;
	public $bahanbakar;
	public $harga;
	private $merk;

	private function statusHarga()
	{
		if ($this -> harga > 50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}

	function setMerk($x)
	{
		$this -> merk = $x;
	}

	function setHarga($y)
	{
		$this -> harga = $y;
	}

	function bacaMerk()
	{
		return $this ->merk;
	}

	function bacaHarga()
	{
		return $this ->harga;
	}

	// function __construct($x, $y)
	// {
	// 	$this ->merk = $x;
	// 	$this ->harga = $y;
	// }

}

class keretaApi extends kendaraan
{
	public $jumlahGerbong;

	function setGerbong($x)
	{
		$this ->jumlahGerbong = $x;
	}

	function bacaGerbong()
	{
		return $this -> jumlahGerbong;
	}
}

class pesawat extends kendaraan
{
	private $tinggiMaks;
	function setTinggiMaks($y)
	{
		$this ->tinggiMaks = $y;
	}

	function bacaTinggiMaks()
	{
		return $this -> tinggiMaks;
	}

	private $kecepatanMaks;
	function setKecepatanMaks($z)
	{
		$this ->kecepatanMaks = $z;
	}

	function bacaKecepatanMaks()
	{
		return $this -> kecepatanMaks;
	}

	function biayaOperasional()
	{
		if ($this ->tinggiMaks > 5000 && $this ->kecepatanMaks > 800) $biaya = $this ->harga * 30/100;
		else if(($this ->tinggiMaks >= 3000 && $this ->tinggiMaks <= 5000) AND ($this ->kecepatanMaks >= 500 && $this ->kecepatanMaks <= 800)) $biaya = $this -> harga * 20/100;
		else if ($this ->tinggiMaks < 3000 && $this ->kecepatanMaks < 500) $biaya = $this ->harga * 10/100;
		else $biaya = $this ->harga * 5/100;

	}
}

	$pesawat1 = new pesawat();
	$pesawat1 -> setMerk("'Boeing 737'");
	$pesawat1 -> setharga('2000000');
	$pesawat1 -> setTinggiMaks('7500');
	$pesawat1 -> setKecepatanMaks('650');
	echo 'Biaya operasional pesawat '.$pesawat1 ->bacaMerk().' dengan harga Rp 2.000.000.000 yang memiliki tinggi maksimum '.$pesawat1 ->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat1 ->bacaKecepatanMaks().'  km/jam adalah Rp. '.$pesawat1 ->bacaHarga();

?>