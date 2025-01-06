// Perbandingan menggunakan operator perbandingan

let a = 10;
let b = 20;

// Perbandingan nilai
console.log("a == b :", a == b);         // Sama dengan
console.log("a != b :", a != b);         // Tidak sama dengan
console.log("a > b  :", a > b);          // Lebih besar dari
console.log("a < b  :", a < b);          // Lebih kecil dari
console.log("a >= b :", a >= b);         // Lebih besar atau sama dengan
console.log("a <= b :", a <= b);         // Lebih kecil atau sama dengan

// Perbandingan identitas (tipe data dan nilai)
let c = "10";
console.log("a === c :", a === c);       // Identik (sama nilai dan tipe)
console.log("a !== c :", a !== c);       // Tidak identik (nilai atau tipe berbeda)

// Menggunakan operator logika untuk perbandingan lebih kompleks
let umur = 25;
let statusKerja = "bekerja";

let hasil1 = (umur >= 18 && statusKerja === "bekerja"); // kedua kondisi harus benar
let hasil2 = (umur < 18 || statusKerja === "bekerja");  // salah satu kondisi harus benar
let hasil3 = !(umur >= 18);                             // negasi dari kondisi

console.log("Hasil 1 (umur >= 18 && statusKerja === 'bekerja') :", hasil1);
console.log("Hasil 2 (umur < 18 || statusKerja === 'bekerja')   :", hasil2);
console.log("Hasil 3 !(umur >= 18)                             :", hasil3);