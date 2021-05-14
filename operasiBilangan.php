<?php
class operasiBilangan
{
	//properties dari class
	private $bilangan1;
	private $bilangan2;

	//constructor
	public function __construct($x, $y)
	{
		$this->bilangan1 = $x;
		$this->bilangan2 = $y;
	}

	//method untuk membaca properti bilangan1
	function bacaBilangan1()
	{
		return $this ->bilangan1;
	}

	//method untuk membaca properti bilangan2
	function bacaBilangan2()
	{
		return $this ->bilangan2;
	}

	//method untuk menjumlahkan bilangan1 dan bilangan2
	function jumlahkan()
	{
		$hasil = $this ->bilangan1 + $this ->bilangan2;
		return $hasil;
	}

	//method untuk mengalikan bilangan1 dan bilangan2
	function kalikan()
	{
		$hasil = $this ->bilangan1 * $this ->bilangan2;
		return $hasil;
	}

	//method untuk mengurangkan bilangan1 dan bilangan2
	function kurangkan()
	{
		$hasil = $this ->bilangan1 - $this ->bilangan2;
		return $hasil;
	}

	//method untuk modulo bilangan1 dan bilangan2
	function modulo()
	{
		$hasil = $this ->bilangan1 % $this ->bilangan2;
		return $hasil;
	}

	//method untuk mempangkatkan bilangan1 dan bilangan2
	function pangkat()
	{
		$hasil = $this ->bilangan1 ^ $this ->bilangan2;
		return $hasil;
	}
}

//instantisasi dan setting properties
$operasi1 = new operasiBilangan(4, 5);

//menampilkan hasil penjumlahan
echo '<p>Hasil Penjumlahan '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->jumlahkan().'</p>';

//menampilkan hasil perkalian
echo '<p>Hasil Perkalian '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->kalikan().'</p>';

//menampilkan hasil pengurangan
echo '<p>Hasil Pengurangan '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->kurangkan().'</p>';

//menampilkan hasil modulo
echo '<p>Hasil Modulo '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->modulo().'</p>';

//menampilkan hasil pangkatkan
echo '<p>Hasil Pangkatkan '.$operasi1->bacaBilangan1().' dan '.$operasi1->bacaBilangan2().' adalah '.$operasi1->pangkat().'</p>';
?>