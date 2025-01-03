<?php

/*

Bila program diatas dijalankan maka akan menghasilkan output sebagai berikut:

php Singa.php

Output: 
4
Singa berlari
Silahkan coba Anda jalankan program diatas


Untuk mengakses property atau method static pada lingkup class kita dapat menggunakan 3 cara yaitu dengan menggunakan nama class seperti cara diatas, menggunakan keyword self atau bisa juga menggunakan keyword static.
Perhatikan contoh berikut:
*/

class Singa
{
	public static $KAKI = 4;

	public function kaki1()
	{
		echo Singa::$KAKI;
	}

	public function kaki2()
	{
		echo self::$KAKI;
	}

	public function kaki3()
	{
		echo static::$KAKI;
	}
}

$singa = new Singa();

echo $singa->kaki1(); 
echo PHP_EOL;
echo $singa->kaki2(); 
echo PHP_EOL;
echo $singa->kaki3(); 
echo PHP_EOL;

/*

Bila program diatas dijalankan maka output dari method kaki1(), kaki2 maupun kaki3 akan sama yaitu 4.

Silahkan coba Anda jalankan program diatas

Visibilitas pada Konsep Statis
Sama seperti property atau method pada umumnya yang memiliki visibilitas, property atau method yang statis pun tetap memiliki visibilitas.

Tingkatan visibilitasnya pun sama seperti pada property atau method biasa yaitu private, protected, public dan default. Tidak ada perbedaan antara statis maupun non statis pada property dan method selain pada cara mengaksesnya saja.

*/