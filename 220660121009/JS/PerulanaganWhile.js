// Pengulangan menggunakan while loop

// Contoh 1: Menghitung dari 1 hingga 5
let i = 1;
while (i <= 5) {
    console.log("Perulangan ke:", i);
    i++;
}

// Contoh 2: Menghitung mundur dari 5 hingga 1
let j = 5;
while (j > 0) {
    console.log("Menghitung mundur:", j);
    j--;
}

// Contoh 3: Pengulangan sampai kondisi tertentu tercapai
let angka = 0;
while (angka < 10) {
    if (angka % 2 === 0) {
        console.log(angka, "adalah bilangan genap");
    } else {
        console.log(angka, "adalah bilangan ganjil");
    }
    angka++;
}

// Contoh 4: Pengulangan dengan kondisi masukan dari pengguna (contoh sederhana)
let input;
while (input !== "stop") {
    input = prompt("Ketikkan sesuatu (ketik 'stop' untuk berhenti):");
    console.log("Kamu mengetik:", input);
}
