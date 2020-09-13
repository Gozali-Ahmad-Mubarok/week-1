<?php 

class mobil
{
	public $merk, $mesin, $max_speed;

}

$bmw = new mobil ;
$bmw->merk = "BMW";
$bmw->mesin = "2000cc";
$bmw->max_speed = "300km/h";

$bmw2 = new mobil ;
$bmw2->merk = "BMW";
$bmw2->mesin = "2500cc";
$bmw2->max_speed = "350km/h";

echo "$bmw->mesin";

echo "<br>";

echo "$bmw2->mesin";
if ($bmw === $bmw2) {
	# code...
	echo "sama";
} else {
	echo " tidak";
}
