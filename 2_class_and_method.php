<?php 

class mobil
{
	public $merk, $tipe, $mesin, $max_speed;

	function cetakTipe(){
		return $this->tipe;
	}

	function kecepatanMaksimal(){
		return "mobil ini memiliki kecepatan max  ".$this->max_speed;
	}
}

$bmw = new mobil ;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "300km/h";


echo "$bmw->tipe";
echo "<br>";
echo "tipe ".$bmw->kecepatanMaksimal();