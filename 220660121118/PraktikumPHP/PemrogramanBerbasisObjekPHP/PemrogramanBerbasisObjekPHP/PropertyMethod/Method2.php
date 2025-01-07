<?php

class Mobil
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->jalan('belakang'); 
echo PHP_EOL;

/*

Output:
Mobil berjalan ke arah depan 
Mobil berjalan ke arah belakang

Bila kita perhatikan, default value akan ditimpa oleh nilai yang kita masukkan. 
Dalam contoh diatas, kita memasukkan nilai sehingga parameter $arah yang tadinya berisi depan berganti menjadi belakang.

*/