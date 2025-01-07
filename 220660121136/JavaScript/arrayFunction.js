// ArrayFunction.js
// Contoh penggunaan fungsi array: map, filter, dan reduce

const numbers = [1, 2, 3, 4, 5];

// Menggunakan map untuk mengalikan setiap elemen dengan 2
const doubled = numbers.map(num => num * 2);
console.log("Array setelah map:", doubled);

// Menggunakan filter untuk mendapatkan angka genap
const evenNumbers = numbers.filter(num => num % 2 === 0);
console.log("Array setelah filter:", evenNumbers);

// Menggunakan reduce untuk menjumlahkan semua angka
const sum = numbers.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
console.log("Hasil reduce (jumlah):", sum);