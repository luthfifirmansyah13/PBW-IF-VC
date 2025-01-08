<?php

/*

Apa itu Return Value
Sebelum kita mengenal apa itu return value, ada baiknya saya sedikit bercerita sebagai penggandaian dari return value.

Jhon Doe adalah seorang petani kedelai. Ia menanam benih kedelai kemudian merawatnya hingga benih itu tumbuh. Setelah tumbuh, ia memupuknya hingga pohon kedelai itu siap untuk dipanen. Jhon kemudian memanen kedelai tersebut setelah dirasa kedelai tersebut siap untuk dipanen.

Dari pengandaian diatas, kita dapat mengibaratkan bahwa proses menanam hingga panen adalah sebuah proses yang terjadi didalam method atau fungsi. Sedangkan kedelai yang dihasilkan adalah return value dari proses tersebut.

Dalam OOP, return value adalah sebuah nilai yang dikembalikan oleh sebuah method ketika method tersebut dipanggil. Tipe data dari return value tidak harus sama dengan tipe data yang dimasukkan melalui parameter.

Bahkan ketika sebuah method tidak memiliki parameter sekalipun, method tersebut tetap dapat mengembalikan return value.



Contoh Penggunaan Return Value
Untuk membuat sebuah method dapat mengembalikan sebuah nilai kita menggunakan keyword return . Perhatikan kembali contoh class Lingkaran berikut:
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

$lingkaran->luas(7); 
echo PHP_EOL;

/*

Pada class Lingkaran diatas, method luas() langsung mengeluarkan output berubah echo hasil dari perkalian rumus luas lingkaran.

Bila kita hendak mengubah agar method luas( tersebut mengembalikan return value maka kita harus mengganti echo dengan keyword return seperti contoh dibawah ini:
return self::PI * $jari * $jari;


ita juga dapat memasukkan return value kedalam sebuah variable sebagai berikut:
$luas = $lingkaran->luas(7);
echo $luas;
*/