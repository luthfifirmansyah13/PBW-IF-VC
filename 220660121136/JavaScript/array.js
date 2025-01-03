// Array.js
// Contoh mendeklarasikan array dan beberapa operasi dasar

// Deklarasi array
const fruits = ["Apple", "Banana", "Cherry"];

// Menambah elemen baru ke array
fruits.push("Durian");
console.log("Array setelah push:", fruits);

// Menghapus elemen terakhir dari array
fruits.pop();
console.log("Array setelah pop:", fruits);

// Mengakses elemen di array
console.log("Elemen pertama:", fruits[0]);

// Menggunakan forEach untuk iterasi array
fruits.forEach((fruit, index) => {
  console.log(`Buah ke-${index + 1}: ${fruit}`);
});