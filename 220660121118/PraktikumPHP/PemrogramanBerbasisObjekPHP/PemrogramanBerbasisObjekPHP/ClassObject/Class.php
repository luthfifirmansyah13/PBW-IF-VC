<?php

/*
ecara mudah, class adalah cetakan atau blueprint dari objek. 
Didalam class terdapat property dan method. Dalam OOP, 
class merupakan kerangka dasar yang harus dibuat sebelum kita membuat real object. 
Untuk lebih jelas, perhatikan gambar berikut:
*/

class Mobil
{
	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

/*
Seperti yang sudah disebutkan pada pembahasan sebelumnya, 
bahwa selain memiliki method, class juga dapat memiliki property. 
Untuk membuat property pada class kita dapat menambah atribut di dalam 
class tersebut dengan mendefinisikannya menggunakan kata kunci public, protected, atau private.
*/