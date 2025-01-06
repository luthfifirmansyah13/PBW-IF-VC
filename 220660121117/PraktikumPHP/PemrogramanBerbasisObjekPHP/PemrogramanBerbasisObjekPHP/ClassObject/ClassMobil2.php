<?php

class Mobil
{
    public $roda; // Property untuk menyimpan jumlah roda

    // Konstruktor untuk menginisialisasi property
    public function __construct($roda)
    {
        $this->roda = $roda;
    }

    // Method untuk menggambarkan aksi mobil
    public function jalan()
    {
        echo 'Mobil berjalan';
    }

    // Method untuk menampilkan jumlah roda
    public function jumlahRoda()
    {
        return $this->roda;
    }
}

// Contoh penggunaan class Mobil
$mobilSaya = new Mobil(4); // Membuat objek Mobil dengan 4 roda
echo $mobilSaya->jalan(); // Menampilkan pesan "Mobil berjalan"
echo ' dengan ' . $mobilSaya->jumlahRoda() . ' roda.'; // Menampilkan jumlah roda

/*
    RUN dan lihat Hasil eksekusi kode di atas.

    Anda juga dapat menjalankan program diatas secara online dengan membuka link berikut https://3v4l.org/RR865.

    Dalam contoh kode di atas, saya menambahkan *konstruktor *untuk menginisialisasi jumlah roda saat objek dibuat.

    Selain itu, saya juga menambahkan method jumlahRoda() untuk menampilkan jumlah roda mobil.

    Anda dapat mengembangkan class ini lebih lanjut sesuai kebutuhan.
*/
?>