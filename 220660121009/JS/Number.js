// Number.js
// Program ini mencakup beberapa fungsi dasar untuk operasi pada angka

// Fungsi untuk menambahkan dua angka
function add(a, b) {
    return a + b;
  }
  
  // Fungsi untuk mengurangi dua angka
  function subtract(a, b) {
    return a - b;
  }
  
  // Fungsi untuk mengalikan dua angka
  function multiply(a, b) {
    return a * b;
  }
  
  // Fungsi untuk membagi dua angka
  function divide(a, b) {
    if (b === 0) {
      return "Error: Pembagian dengan nol tidak diizinkan.";
    }
    return a / b;
  }
  
  // Fungsi untuk menghitung sisa bagi (modulus)
  function modulus(a, b) {
    return a % b;
  }
  
  // Fungsi untuk menghitung pangkat (a^b)
  function power(a, b) {
    return Math.pow(a, b);
  }
  
  // Fungsi untuk menghitung akar kuadrat dari sebuah angka
  function squareRoot(a) {
    if (a < 0) {
      return "Error: Akar kuadrat dari angka negatif tidak nyata.";
    }
    return Math.sqrt(a);
  }
  
  // Fungsi untuk membulatkan ke atas
  function roundUp(a) {
    return Math.ceil(a);
  }
  
  // Fungsi untuk membulatkan ke bawah
  function roundDown(a) {
    return Math.floor(a);
  }
  
  // Fungsi untuk membulatkan ke nilai terdekat
  function roundNearest(a) {
    return Math.round(a);
  }
  
  // Fungsi untuk menghasilkan angka acak antara dua nilai
  function randomBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  
  // Contoh penggunaan fungsi
  console.log("Penjumlahan 5 + 3 =", add(5, 3));              // Output: 8
  console.log("Pengurangan 10 - 4 =", subtract(10, 4));       // Output: 6
  console.log("Perkalian 7 * 2 =", multiply(7, 2));           // Output: 14
  console.log("Pembagian 20 / 4 =", divide(20, 4));           // Output: 5
  console.log("Modulus 10 % 3 =", modulus(10, 3));            // Output: 1
  console.log("Pangkat 2^3 =", power(2, 3));                  // Output: 8
  console.log("Akar kuadrat dari 16 =", squareRoot(16));      // Output: 4
  console.log("Pembulatan ke atas dari 4.2 =", roundUp(4.2)); // Output: 5
  console.log("Pembulatan ke bawah dari 4.8 =", roundDown(4.8)); // Output: 4
  console.log("Pembulatan terdekat dari 4.5 =", roundNearest(4.5)); // Output: 5
  console.log("Angka acak antara 1 dan 10 =", randomBetween(1, 10)); // Output: (angka acak antara 1 dan 10)
  