# Daily Routine To-Do List

Daily Routine To-Do List adalah aplikasi web sederhana yang membantu Anda mengatur dan melacak rutinitas harian Anda. Aplikasi ini memungkinkan pengguna untuk membuat dan mengelola daftar tugas untuk rutinitas pagi, siang, dan malam.

## Fitur

1. **Tambah Tugas**: Pengguna dapat menambahkan tugas baru ke dalam rutinitas pagi, siang, atau malam.

2. **Hapus Tugas**: Setiap tugas dapat dihapus secara individual.

3. **Tandai Tugas Selesai**: Pengguna dapat menandai tugas sebagai selesai dengan mencentang kotak di samping tugas.

4. **Penyimpanan Lokal**: Semua tugas disimpan di penyimpanan lokal browser, sehingga data tetap tersimpan bahkan setelah menutup browser.

5. **Bersihkan Semua Centang**: Tombol untuk menghapus semua centang sekaligus, berguna untuk memulai hari baru dengan daftar tugas yang sama.

6. **Hapus Semua Data**: Opsi untuk menghapus semua data tugas, dengan konfirmasi untuk mencegah penghapusan yang tidak disengaja.

7. **Desain Responsif**: Antarmuka yang responsif dan dapat diakses dengan baik di berbagai perangkat dan ukuran layar.

## Teknologi yang Digunakan

- HTML5
- CSS3
- JavaScript (ES6+)
- Local Storage API

## Cara Menggunakan

1. Buka `index.html` di browser web Anda.
2. Pilih jenis rutinitas (pagi, siang, atau malam) dari dropdown.
3. Ketik tugas baru di kotak input dan klik "Add" atau tekan Enter untuk menambahkan tugas.
4. Centang kotak di samping tugas untuk menandainya sebagai selesai.
5. Klik tombol "Delete" di samping tugas untuk menghapusnya.
6. Gunakan tombol "Clear All Checkbox" untuk menghapus semua centang.
7. Gunakan tombol "Clear All Data" untuk menghapus semua tugas (akan muncul konfirmasi).

## Instalasi

1. Clone repository ini:

## Daftar Isi Cara Kerja Fungsionalitas
1. [Struktur Data](#1-struktur-data)
2. [Penambahan Tugas](#2-penambahan-tugas)
3. [Penghapusan Tugas](#3-penghapusan-tugas)
4. [Penandaan Tugas Selesai](#4-penandaan-tugas-selesai)
5. [Penyimpanan Data](#5-penyimpanan-data)
6. [Pembersihan Checkbox](#6-pembersihan-checkbox)
7. [Penghapusan Semua Data](#7-penghapusan-semua-data)
8. [Rendering Tampilan](#8-rendering-tampilan)
9. [Responsivitas](#9-responsivitas)

## 1. Struktur Data

Data tugas disimpan dalam objek JavaScript:

```javascript
let tasks = {
    morning: [],
    afternoon: [],
    evening: []
};

Setiap tugas dalam array memiliki struktur:

{
    text: string,
    completed: boolean
}

## 2. Penambahan Tugas

const addTask = () => {
    const text = taskInput.value.trim();
    const routine = routineType.value;
    
    if (text) {
        tasks[routine].push({
            text,
            completed: false
        });
        saveTasks();
        renderTasks();
    }
};

- Mengambil teks dari input dan jenis rutinitas dari dropdown
- Menambahkan objek tugas baru ke array yang sesuai
- Menyimpan perubahan dan memperbarui tampilan

## 3. Penghapusan Tugas

const deleteTask = (routine, index) => {
    tasks[routine].splice(index, 1);
    saveTasks();
    renderTasks();
};

- Menghapus tugas dari array berdasarkan indeks
- Menyimpan perubahan dan memperbarui tampilan

## 4. Penandaan Tugas Selesai

checkbox.addEventListener('change', () => {
    task.completed = checkbox.checked;
    li.classList.toggle('completed', task.completed);
    saveTasks();
});

- Mengubah status completed tugas saat checkbox diubah
- Memperbarui tampilan dan menyimpan perubahan

## 5. Penyimpanan Data

const saveTasks = () => {
    localStorage.setItem('routineTasks', JSON.stringify(tasks));
};

const loadTasks = () => {
    const savedTasks = localStorage.getItem('routineTasks');
    if (savedTasks) {
        tasks = JSON.parse(savedTasks);
    }
};

- Menyimpan data ke localStorage dalam format JSON
- Memuat data dari localStorage saat aplikasi dimulai

## 6. Pembersihan Checkbox

const clearAllCheckboxes = () => {
    for (let routine in tasks) {
        tasks[routine].forEach(task => {
            task.completed = false;
        });
    }
    saveTasks();
    renderTasks();
};

- Mengatur ulang status completed semua tugas menjadi false
- Menyimpan perubahan dan memperbarui tampilan

## 7. Penghapusan Semua Data

const clearAllData = () => {
    if (confirm('Are you sure you want to delete all tasks?')) {
        tasks = {
            morning: [],
            afternoon: [],
            evening: []
        };
        saveTasks();
        renderTasks();
    }
};

- Mereset objek tasks ke keadaan awal setelah konfirmasi
- Menyimpan perubahan dan memperbarui tampilan

## 8. Rendering Tampilan

const renderTasks = () => {
    for (let routine in routineContainers) {
        const container = routineContainers[routine];
        container.innerHTML = '';
        
        tasks[routine].forEach((task, index) => {
            const taskElement = createTaskElement(task, routine, index);
            container.appendChild(taskElement);
        });
    }
};

- Membersihkan kontainer HTML
- Membuat elemen HTML untuk setiap tugas
- Menambahkan elemen-elemen tersebut ke DOM

## 9. Responsivitas

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }
    .routine-container {
        width: 100%;
    }
}

- Mengubah layout untuk layar yang lebih kecil
- Menyesuaikan ukuran dan posisi elemen

