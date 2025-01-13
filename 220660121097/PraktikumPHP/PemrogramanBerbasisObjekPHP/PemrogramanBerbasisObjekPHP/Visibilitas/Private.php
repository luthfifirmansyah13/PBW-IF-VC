<?php

/*

Dalam bahasa PHP, Visibilitas dibedakan menjadi 4 yaitu private, protected, public dan default atau tidak didefinisikan.

Berikut adalah penjelasan masing-masing visibilitas.

Private
Visibilitas private adalah visibilitas paling rendah pada OOP. Sebuah property atau method yang diberikan visibilitas private maka property atau method tersebut hanya dapat diakses dari lingkup class dimana property atau method tersebut didefinisikan.

Untuk memberikan visibilitas private pada property atau method kita dapat menggunakan keyword private didepan property atau method. Perhatikan contoh berikut:

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

/*

Bila program diatas dijalankan, maka akan muncul error PHP Fatal error: Uncaught Error: Call to private method Mobil::jalan() from context. 

Hal ini terjadi karena kita mencoba mengakses fungsi jalan() yang memiliki visibilitas private diluar lingkup class yaitu dipanggil dari lingkup object. Hal yang sama juga akan terjadi pada property $roda dimana property tersebut juga memiliki visibilitas private.

Silahkan coba Anda jalankan program diatas.

Untuk mengakses property atau method dalam lingkup class digunakan keyword $this yang akan dibahas secara spesifik pada bab terpisah. Perhatikan contoh berikut:

Silahkan coba Anda jalankan program diatas.

Bila program diatas dieksekusi, maka akan muncul output 4 sebagaimana nilai dari property $roda.

*/