<?php

/*
Apa itu Visibilitas
Visibilitas adalah salah satu fitur penting yang ada pada OOP. 
Fitur ini mengatur hak akses terhadap property maupun method dari sebuah class. 
Hak akses disini berbeda dengan hak akses pada aplikasi, 
hak akses disini adalah hak akses yang ada pada level bahasa pemrograman.

Visibilitas dalam OOP berperan penting dalam menjamin keamanan informasi yang terdapat pada property maupun method. 
Dengan fitur ini, programmer dapat membatasi dan mengatur programmer lainnya tentang 
bagaimana mengakses sebuah property atau method dari sebuah class atau fitur yang dibuatnya.
*/

class Mobil
{
	private $roda = 4;

	private function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->roda; 
echo PHP_EOL;