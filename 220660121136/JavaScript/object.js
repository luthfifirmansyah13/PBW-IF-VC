// Objects.js
// Program ini mencakup beberapa contoh manipulasi objek dalam JavaScript

// Membuat objek sederhana untuk menyimpan informasi tentang seseorang
const person = {
    name: "Budi",
    age: 25,
    gender: "Male",
    hobbies: ["reading", "sports", "coding"]
  };
  
  // Menampilkan seluruh objek
  console.log("Person:", person);
  
  // Mengakses properti objek
  console.log("Nama:", person.name);
  console.log("Usia:", person.age);
  console.log("Hobi:", person.hobbies);
  
  // Menambahkan properti baru ke objek
  person.country = "Indonesia";
  console.log("Person setelah menambahkan properti country:", person);
  
  // Mengubah nilai properti
  person.age = 26;
  console.log("Person setelah mengubah age:", person);
  
  // Menghapus properti dari objek
  delete person.gender;
  console.log("Person setelah menghapus gender:", person);
  
  // Menggunakan metode di dalam objek
  const car = {
    brand: "Toyota",
    model: "Camry",
    year: 2020,
    startEngine: function() {
      console.log("Mesin mobil menyala!");
    },
    getCarInfo: function() {
      return `Mobil ini adalah ${this.brand} ${this.model}, tahun ${this.year}`;
    }
  };
  
  // Menjalankan metode di dalam objek
  car.startEngine();
  console.log(car.getCarInfo());
  
  // Objek dengan nested objects (objek di dalam objek)
  const student = {
    id: 101,
    name: "Siti",
    address: {
      street: "Jl. Merdeka",
      city: "Jakarta",
      zip: "12345"
    },
    subjects: ["Math", "Science", "English"]
  };
  
  // Mengakses properti dari objek di dalam objek
  console.log("Alamat siswa:", student.address.street, student.address.city);
  console.log("Pelajaran siswa:", student.subjects);
  
  // Fungsi untuk menambah hobi ke objek person
  function addHobby(personObj, hobby) {
    personObj.hobbies.push(hobby);
  }
  
  addHobby(person, "traveling");
  console.log("Person setelah menambah hobi:", person);
  
  // Looping melalui properti objek
  console.log("Looping melalui properti person:");
  for (let key in person) {
    console.log(`${key}: ${person[key]}`);
  }
  
  // Mengecek apakah objek memiliki properti tertentu
  console.log("Apakah person memiliki properti 'name'?", person.hasOwnProperty("name")); // true
  console.log("Apakah person memiliki properti 'salary'?", person.hasOwnProperty("salary")); // false
  
  // Menyalin objek (shallow copy)
  const newPerson = Object.assign({}, person);
  newPerson.name = "Andi";
  console.log("newPerson:", newPerson);
  console.log("Person asli:", person); // Person asli tidak berubah
  
  // Menyalin objek (deep copy) menggunakan JSON (jika objeknya tidak memiliki metode)
  const deepCopyPerson = JSON.parse(JSON.stringify(person));
  deepCopyPerson.name = "Eka";
  console.log("deepCopyPerson:", deepCopyPerson);
  console.log("Person asli:", person); // Person asli tetap tidak berubah
  