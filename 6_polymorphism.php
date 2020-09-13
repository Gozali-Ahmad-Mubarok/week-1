<?php 

class mobil
{
	public $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe(){
		return $this->tipe;
	}

	public function kecepatanMaksimal(){
		return "mobil ini memiliki kecepatan max  ".$this->max_speed;
	}

	function injekGas(){
		return" mengalirkan bensin ke ruang bakar, rpm naik dan mobil berjalan ";
	}
}
class tesla extends mobil 
{
	function selfParking(){
		echo "parkir sendiri ";
	}

	function injekGas(){
		return" mengalirkan listrik ke dinamo, rpm naik dan mobil berjalan ";
	}
}

$bmw = new mobil ;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "300km/h";

$tesla = new tesla ;
$tesla->merk = "tesla";
$tesla->tipe = "xxxx";
$tesla->mesin = "2000cc";
$tesla->max_speed = "350km/h";


echo "BMW : ".$bmw->injekGas();
echo "<br>";
echo "<br>";
echo "tesla : ".$tesla->injekGas();