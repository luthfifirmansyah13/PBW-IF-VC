<?php

/*

Jika property adalah segala sesuatu yang dimiliki oleh class atau object, 
maka method adalah segala sesuatu yang dapat dilakukan oleh class atau object. 
Sama seperti property, method juga memiliki visibilitas serta dapat memiliki parameter.

Parameter dapat memiliki nilai awal atau default value. Bila parameter tidak memiliki default
value maka parameter tersebut dianggap sebagai mandatory parameter. Perhatikan kembali class Mobil berikut:

*/

class Mobil
{
	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

/*

Pada contoh diatas, method jalan() memiliki visibilitas public dan tidak memiliki parameter. 
Untuk menambahkan parameter, kita dapat mendefinisikannya sebagai berikut:

public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}



*/