<?php

$nama = "Pemrograman Berbasis Web";
$NAMA = "Jhon";

/*
    Variabel $nama dan $NAMA adalah dua variabel yang berbeda. Mereka tidak sama.
    Penulisan huruf besar dan kecil dalam program harus diperhatikan, 
    karena bisa menyebabkan error bila salah.
    Contoh:
*/

$umur = 19;

echo "Umur saya adalah $Umur";

/*
    Lihat!

    Pada kode di atas, kita membuat variabel $umur dengan huruf kecil. Lalu saat menggunakan variabel kita menggunakan $Umur.

    Jelas sekali ini akan menyebabkan error.

    Untuk menghindari ini, kita harus konsisten dalam penamaan variabel dan konstanta.

    Gunakan nama variabel dengan huruf kecil saja dan konstanta dengan huruf kapital.

    Contoh:
*/

const INI_KONSTANTA = 123;
$ini_variabel = 23;
$iniJugaVariabel = 49;

/*
    Eh, kok ada huruf kapital di $iniJugaVariabel?

    Ini namanya camelCase.

    Jika variabel terdiri dari dua atau lebih suku kata, 
    maka kita bisa memisahnya dengan huruf kapital atau bisa juga dengan garis bawah (underscore).
*/
?>