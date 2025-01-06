// Pengulangan menggunakan do-while loop

// Contoh 1: Menghitung dari 1 hingga 5
let i = 1;
do {
    console.log("Perulangan ke:", i);
    i++;
} while (i <= 5);

// Contoh 2: Menghitung mundur dari 5 hingga 1
let j = 5;
do {
    console.log("Menghitung mundur:", j);
    j--;
} while (j > 0);

// Contoh 3: Pengulangan sampai kondisi tertentu tercapai
let angka = 0;
do {
    if (angka % 2 === 0) {
        console.log(angka, "adalah bilangan genap");
    } else {
        console.log(angka, "adalah bilangan ganjil");
    }
    angka++;
} while (angka < 10);

// Contoh 4: Pengulangan dengan kondisi masukan dari pengguna (contoh sederhana)
let input;
do {
    input = prompt("Ketikkan sesuatu (ketik 'stop' untuk berhenti):");
    console.log("Kamu mengetik:", input);
} while (input !== "stop");