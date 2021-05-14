<?php
class penulis {
	public function saya() {
		echo "Saya Penulis";
	}

	public function sayaAdalah() {
		self :: saya();
	}
}

class programmer extends penulis {
	public function saya() {
		echo "Saya Programmer Web";
	}
}

$TukangKode = new programmer();
$TukangKode -> sayaAdalah();
?>