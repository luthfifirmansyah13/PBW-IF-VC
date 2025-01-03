// Boolean&kondisi.js
// Contoh penggunaan Boolean dan pernyataan kondisi

const isMember = true;
const age = 18;

// Menggunakan if-else
if (isMember) {
  console.log("Selamat datang, member!");
} else {
  console.log("Anda bukan member.");
}

// Menggunakan kondisi bertingkat
if (age >= 18) {
  console.log("Anda dewasa.");
} else if (age >= 13) {
  console.log("Anda remaja.");
} else {
  console.log("Anda anak-anak.");
}

// Menggunakan logika Boolean
const isAdult = age >= 18;
console.log("Apakah dewasa?", isAdult);
