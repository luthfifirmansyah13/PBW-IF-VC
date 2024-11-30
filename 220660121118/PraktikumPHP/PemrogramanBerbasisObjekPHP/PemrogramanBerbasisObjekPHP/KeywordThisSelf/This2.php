<?php

/*

Pada pemrograman berbasis objek, konsep keyword $this pasti ada walaupun cara penulisan dan atau syntax-nya mungkin berbeda. Pada OOP, keyword $this adalah sebuah variable yang merujuk pada object yang diinstansiasi.

Variable $this nantinya akan diganti dengan variable hasil instansiasi ketika sebuah object terbentuk.

Pada contoh diatas, variable $this akan diganti oleh variable $avanza. Untuk lebih memahaminya, mari kita lihat contoh dibawah ini:

*/
class Printer
{
	private $content;

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function cetak()
	{
		echo $this->content;
	}
}

$printer1 = new Printer();
$printer1->setContent('Aku printer satu');
$printer1->cetak(); 
echo PHP_EOL;

$printer2 = new Printer();
$printer2->setContent('Aku printer dua'); 
echo $printer2->cetak();
echo PHP_EOL;
$printer1->cetak(); 
echo PHP_EOL;

/*

output
Aku printer satu 
Aku printer dua 
Aku printer satu

Silahkan coba Anda jalankan program diatas.

Dari contoh diatas dapat kita pahami bahwa keyword $this itu merujuk pada spesifik object dan tidak bercampur antara satu object dengan object lainnya.

Ini dibuktikan dengan hasil output antara $printer1 dan $printer2 yang berbeda walaupun keduanya sama-sama menginisiasi class Printer.

Nilai $content pada $printer1 tidak akan tertimpa oleh nilai $content pada $printer2 karena keduanya merupakan object yang berbeda.

Secara mudah, keyword $this adalah sebuah keyword yang digunakan untuk merujuk pada obejct yang belum diketahui dan digunakan untuk mempermudah kita dalam menuliskan code.

Keyword $this hanya dapat diakses dari internal class dan tidak dapat diakses dari luar class atau pada lingkup object.

Selain itu, keyword $this bersifat read only seperti halnya konstanta sehingga kita tidak dapat mengubah nilainya.

*/