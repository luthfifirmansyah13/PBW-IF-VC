<?php

class Mobil
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}

}

$avanza = new Mobil();

/*
    Pada contoh diatas, kita menginstansiasi class Mobil dan memasukkannya kedalam variable $avanza . 
    Selain cara diatas, kita juga dapat melakukan instansiasi tanpa menggunakan tanda kurung () setelah nama class.
    contoh:
    $avanza = new Mobil;
*/

// Untuk memanggil method maupun property yang bersifat public dapat dilakukan sebagai berikut:
$avanza->roda = 4;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;

/*
    Output:
    Mobil berjalan 
    4
*/