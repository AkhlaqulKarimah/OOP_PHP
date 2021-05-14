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

	function __construct($x, $y)
	{
		$this ->merk = $x;
		$this ->harga = $y;
	}

}

?>