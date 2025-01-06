<?php

class Koneksi
{
	public function connect($username, $password, $host = 'localhost', $port = 3306)
	{
		//Logic koneksi
	}
}

$koneksi = new Koneksi();
$koneksi->connect('root', '');

/*

Urutan Parameter pada Method
Sebenarnya tidak ada aturan yang baku yang mengatur tentang urutan parameter pada sebuah method.

Kita bisa saja mendefinisikan sesuka kita parameter-parameter dari sebuah method, namun tips berikut dapat dipertimbangkan untuk menghindari error dan memudahkan kita pada saat pemanggilan method.

Parameter yang mandatory diletakkan didepan parameter yang memiliki default value.

Penamaan parameter harus spesifik dan memiliki arti yang jelas serta menunjukkan kegunaan dari parameter tersebut.

Gunakan type hinting (akan dibahas pada bab terpisah) pada parameter untuk menghindari kesalahan ketika memberikan nilai pada parameter.

Bila Anda perhatikan, apakah class Koneksi telah menerapkan tips diatas?

Jawabannya adalah iya. Hanya saja, kita belum menerapkan type hinting karena memang belum dibahas.

*/