<?php
/*
    Atribut ini biasanya diinisialisasi dalam konstruktor menggunakan metode __construct(), 
    yang memungkinkan kita untuk memberikan nilai awal kepada property saat objek dibuat.
*/

class Mobil
{
    public $roda; // Property yang dapat diakses dari luar

    public function __construct($roda)
    {
        $this->roda = $roda; // Menginisialisasi property
    }

    public function jalan()
    {
        echo 'Mobil berjalan';
    }
}

// Membuat objek dari class Mobil
$mobilSaya = new Mobil(4);
echo $mobilSaya->jalan(); // Menampilkan pesan "Mobil berjalan"