<?php

/*

Visibilitas public adalah visibilitas tertinggi pada OOP. Sebuah property atau method yang diberikan visibilitas 
public maka property atau method tersebut dapat diakses baik dari lingkup class maupun object. 
Untuk memberikan visibilitas public pada property atau method kita dapat menggunakan keyword public 
didepan property atau method. Mari kita melihat kembali contoh berikut:

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

Method jumlahRoda() diberikan visibilitas public sehingga method tersebut dapat diakses dari luar class yaitu dalam lingkup object.

Sehingga bila program diatas dieksekusi, maka akan muncul output 4 sebagaimana nilai dari property $roda . 

Silahkan coba Anda jalankan program diatas

Default atau tidak didefinisikan
Bila kita tidak mendefinisikan visibilitas pada property atau method secara eksplisit, maka PHP secara default akan memberikan visibilitas pada property atau method tersebut dengan visibilitas public.

Sehingga public function jumlahRoda() sama dengan function jumlahRoda() yaitu sama-sama memiliki visibilitas public.

Tips Visibilitas
Tips diatas sangat berguna untuk menghindari kebingungan dan menjaga konsistensi code.

maka ada baiknya Anda menerapkan tips berikut:

Definisikan visibilitas secara eksplisit.

Gunakan visibilitas private atau protected pada property.

Hindari penggunaan visibilitas public pada property, gunakan hanya jika memang benar-benar diperlukan.

Batasi visibilitas pada method jika memungkinkan.

*/