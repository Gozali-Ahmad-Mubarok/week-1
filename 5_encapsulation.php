<?php 

class mobil
{
	private $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe(){
		return $this->tipe;
	}

	public function kecepatanMaksimal(){
		return "mobil ini memiliki kecepatan max  ".$this->max_speed;
	}
}
class tesla extends mobil 
{
	function selfParking(){
		echo "parkir sendiri ";
	}
}

$tesla = new tesla ;
$tesla->merk = "tesla";
$tesla->tipe = "xxxxx ";
$tesla->mesin = "listrik";
$tesla->max_speed = "300km/h";

echo $tesla->cetakTipe();

