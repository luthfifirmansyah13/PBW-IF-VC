<?php

/*

Sama seperti keyword $this , keyword self juga memiliki pengertian dan fungsi yang sama. Yang membedakannya dengan keyword $this adalah bahwa keyword self hanya digunakan untuk memanggil property atau method yang bersifat statis dan juga untuk memanggil konstanta.

Perhatikan kembali contoh berikut:

*/

class Lingkaran
{
	const PI = 3.14;

	public function luas($jari)
	{
		echo self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran(); 

echo Lingkaran::PI;
echo PHP_EOL;

$lingkaran->luas(7); 
echo PHP_EOL;

/*

Silahkan coba Anda jalankan program diatas.

Sama seperti keyword $this , keyword self hanya dapat digunakan pada class self juga hanya dapat digunakan pada lingkup class dan tidak dapat digunakan pada lingkup objec

*/