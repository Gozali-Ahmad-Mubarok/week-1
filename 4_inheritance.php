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

class BMW extends mobil 
{
	
	function selfParking(){
		echo "parkir sendiri ";
	}
}

class tesla extends mobil 
{
	
	function selfParking(){
		echo "parkir sendiri ";
	}
}


$bmw = new BMW ;
$bmw->merk = "tesla";
$bmw->tipe = "xxxxx ";
$bmw->mesin = "listrik";
$bmw->max_speed = "300km/h";


$tesla = new tesla ;
$tesla->merk = "tesla";
$tesla->tipe = "xxxxx ";
$tesla->mesin = "listrik";
$tesla->max_speed = "300km/h";

echo  $tesla->selfParking();
echo "<br>";
echo $bmw->kecepatanMaksimal();