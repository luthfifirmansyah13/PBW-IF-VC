<?php

/*

Visibilitas pada Konsep Konstanta
Sama seperti property atau method pada umumnya yang memiliki visibilitas, property atau method yang statis pun tetap memiliki visibilitas.

Tingkatan visibilitasnya pun sama seperti pada property atau method biasa yaitu private, protected, public dan default. Tidak ada perbedaan antara statis maupun non statis pada property dan method selain pada cara mengaksesnya saja.

Namun, perlu diingat bahwa konstanta hanya dapat memiliki visibilitas public karena tidak dapat diakses menggunakan keyword self atau static jika memiliki visibilitas private atau protected.

Contoh berikut menunjukkan bagaimana visibilitas pada konstanta:
*/

class Lingkaran
{
	private const PI_PRIVATE = 3.14;
	protected const PI_PROTECTED = 3.14;
	public const PI_PUBLIC = 3.14;

	public static function luas()
	{
		echo self::PI_PUBLIC;
	}
}

echo Lingkaran::PI_PUBLIC;
echo PHP_EOL;
Lingkaran::luas(); 
echo PHP_EOL;

/*

Pada contoh diatas, konstanta PI_PRIVATE dan PI_PROTECTED tidak dapat diakses secara langsung dari luar class karena memiliki visibilitas private dan protected.

*/