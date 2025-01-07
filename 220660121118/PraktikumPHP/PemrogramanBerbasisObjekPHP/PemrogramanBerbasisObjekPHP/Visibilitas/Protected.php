<?php

/*

Sebuah property atau method yang diberikan visibilitas protected maka property atau method tersebut dapat diakses dari lingkup class dimana property atau method tersebut didefinisikan serta turunan dari class tersebut.

Untuk memberikan visibilitas protected pada property atau method kita dapat menggunakan keyword protected didepan property atau method. Perhatikan contoh berikut:

*/

class Mobil
{
	private $roda = 4;

	protected function jalan()
	{
		echo 'Mobil berjalan';
	}

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();
echo $avanza->jalan(); 
echo PHP_EOL;

/*

Bila program diatas dijalankan, maka akan muncul error PHP Fatal error: Uncaught Error: Call to protected method Mobil::jalan() rom context. 

Hal ini terjadi karena kita mencoba mengakses fungsi jalan() yang memiliki visibilitas protected diluar lingkup class yaitu dipanggil dari lingkup object.

Silahkan coba Anda jalankan program diatas

*/