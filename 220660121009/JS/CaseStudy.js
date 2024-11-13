// CaseStudy.js
// Studi Kasus: Pengelolaan Data Mahasiswa

// Array untuk menyimpan data mahasiswa
const students = [
    {
      id: 1,
      name: "Alice",
      age: 20,
      major: "Informatika",
      grades: [90, 85, 88]
    },
    {
      id: 2,
      name: "Bob",
      age: 22,
      major: "Matematika",
      grades: [75, 80, 78]
    },
    {
      id: 3,
      name: "Charlie",
      age: 21,
      major: "Fisika",
      grades: [95, 89, 92]
    }
  ];
  
  // Fungsi untuk menghitung rata-rata nilai mahasiswa
  function calculateAverage(grades) {
    const total = grades.reduce((sum, grade) => sum + grade, 0);
    return total / grades.length;
  }
  
  // Menampilkan data setiap mahasiswa
  function displayStudentData(students) {
    students.forEach(student => {
      console.log(`ID: ${student.id}`);
      console.log(`Nama: ${student.name}`);
      console.log(`Usia: ${student.age}`);
      console.log(`Jurusan: ${student.major}`);
      console.log(`Rata-rata Nilai: ${calculateAverage(student.grades).toFixed(2)}`);
      console.log("------------------------------");
    });
  }
  
  // Menambah mahasiswa baru ke dalam array
  function addStudent(id, name, age, major, grades) {
    const newStudent = {
      id,
      name,
      age,
      major,
      grades
    };
    students.push(newStudent);
    console.log(`Mahasiswa ${name} berhasil ditambahkan!`);
  }
  
  // Mencari mahasiswa berdasarkan ID
  function findStudentById(id) {
    const student = students.find(student => student.id === id);
    if (student) {
      console.log(`Mahasiswa ditemukan: ${student.name}, Jurusan: ${student.major}`);
    } else {
      console.log("Mahasiswa dengan ID tersebut tidak ditemukan.");
    }
  }
  
  // Menghapus mahasiswa berdasarkan ID
  function deleteStudentById(id) {
    const index = students.findIndex(student => student.id === id);
    if (index !== -1) {
      const removedStudent = students.splice(index, 1)[0];
      console.log(`Mahasiswa ${removedStudent.name} berhasil dihapus.`);
    } else {
      console.log("Mahasiswa dengan ID tersebut tidak ditemukan.");
    }
  }
  
  // Menjalankan fungsi-fungsi
  console.log("Data Mahasiswa Awal:");
  displayStudentData(students);
  
  console.log("\nMenambah Mahasiswa Baru:");
  addStudent(4, "David", 23, "Biologi", [80, 85, 87]);
  displayStudentData(students);
  
  console.log("\nMencari Mahasiswa dengan ID 2:");
  findStudentById(2);
  
  console.log("\nMenghapus Mahasiswa dengan ID 1:");
  deleteStudentById(1);
  displayStudentData(students);
  