<?php

/*

Apa itu $this
Pada pembahasan sebelumnya kita sudah cukup banyak menggunakan keyword $this ketika memanggil property dalam lingkup class seperti pembahasan tentang visibilitas. Perhatikan kembali contoh dibawah ini:

*/

class Mobil
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();
echo $avanza->jumlahRoda(); 
echo PHP_EOL;

/*

Pada pemrograman berbasis objek, konsep keyword $this pasti ada walaupun cara penulisan dan atau syntax-nya mungkin berbeda. Pada OOP, keyword $this adalah sebuah variable yang merujuk pada object yang diinstansiasi.

Variable $this nantinya akan diganti dengan variable hasil instansiasi ketika sebuah object terbentuk.

Pada contoh diatas, variable $this akan diganti oleh variable $avanza. Untuk lebih memahaminya, mari kita lihat contoh dibawah ini:

*/
