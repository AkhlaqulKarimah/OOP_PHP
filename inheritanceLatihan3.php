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
		return $biaya;

	}
}

	$pesawat1 = new pesawat();
	$pesawat1 -> setMerk("'Boeing 737'");
	$pesawat1 -> setharga('2000000');
	$pesawat1 -> setTinggiMaks('7500');
	$pesawat1 -> setKecepatanMaks('650');
	echo 'Biaya operasional pesawat '.$pesawat1 ->bacaMerk().' yang memiliki tinggi maksimum '.$pesawat1 ->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat1 ->bacaKecepatanMaks().'  km/jam adalah Rp. '.$pesawat1 ->biayaOperasional();
	echo "<p/>";

	$pesawat2 = new pesawat();
	$pesawat2 -> setMerk("'Boeing 747'");
	$pesawat2 -> setharga('3500000');
	$pesawat2 -> setTinggiMaks('5800');
	$pesawat2 -> setKecepatanMaks('750');
	echo 'Biaya operasional pesawat '.$pesawat2 ->bacaMerk().' yang memiliki tinggi maksimum '.$pesawat2 ->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat2 ->bacaKecepatanMaks().'  km/jam adalah Rp. '.$pesawat2 ->biayaOperasional();
	echo "<p/>";

	$pesawat3 = new pesawat();
	$pesawat3 -> setMerk("'Cassa'");
	$pesawat3 -> setharga('750000');
	$pesawat3 -> setTinggiMaks('3500');
	$pesawat3 -> setKecepatanMaks('500');
	echo 'Biaya operasional pesawat '.$pesawat3 ->bacaMerk().' yang memiliki tinggi maksimum '.$pesawat3 ->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat3 ->bacaKecepatanMaks().'  km/jam adalah Rp. '.$pesawat3 -> biayaOperasional();

?>