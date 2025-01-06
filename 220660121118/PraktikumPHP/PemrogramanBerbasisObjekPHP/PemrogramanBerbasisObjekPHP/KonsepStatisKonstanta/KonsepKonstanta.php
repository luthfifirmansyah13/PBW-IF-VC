<?php

/*

Apa itu Konstanta
Bila kita kembali ke pelajaran jaman SMA, konstanta adalah sebuah nilai yang tidak berubah dan telah ditetapkan nilainya dari sejak awal.

Contoh konstanta adalah PI yang nilainya 3.14 ada juga gaya gravitasi yang nilainya 9.8. Tidak jauh berbeda dengan konsep diatas, pada OOP konstanta adalah sebuah nilai yang tidak dapat dirubah selama proses runtime.


Contoh Penerapan Konsep Konstanta
Untuk mendefinisikan sebuah konstanta kita menggunakan keyword const dan untuk mengakses konstanta didalam class kita menggunakan keyword self dan diluar class kita menggunakan nama class.
Perhatikan contoh berikut:
*/
class Lingkaran
{
   public const PI = 3.14;

   public static function luas($jari)
   {
   	echo self::PI * $jari * $jari;
   }
}

echo Lingkaran::PI;
echo PHP_EOL;
Lingkaran::luas(7); 
echo PHP_EOL;

/*

Output: 
3.14
153.86

*/