<?php

/*

Apa itu Konsep Statis
Dalam pemrograman berbasis objek segala sesuatu diibaratkan atau dimodelkan dalam class dan untuk merealisasikannya kita harus melakukan instansiasi.

Sebagai contoh ketika kita ingin mengetahui jumlah roda pada class Mobil kita harus melakukan instansiasi class Mobil dan memasukkannya kedalam variable baru kemudian kita memanggilnya method jumlahRoda().

Itu adalah aturan dasar dari konsep OOP dimana segala sesuatu dimodelkan kedalam class atau object.

Konsep statis atau static adalah sebuah konsep yang keluar dari aturan dasar dari konsep OOP tersebut. Pada konsep static kita tidak perlu melakukan instansiasi untuk dapat memanggil sebuah property atau method.

Karena tidak perlu melakukan instansiasi, maka kita dapat langsung memanggil property atau method dengan menggunakan nama class diikuti :: (scope resolution operation) diikuti property atau method (NamaClass::$propertyStatic).


Contoh Penerapan Konsep Statis
Untuk mendefinisikan sebuah property atau method menjadi statis, kita menggunakan keyword static seperti pada contoh berikut:
*/

class Singa
{
	const KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}
}

echo Singa::KAKI; 
echo PHP_EOL;
Singa::lari(); 
echo PHP_EOL;