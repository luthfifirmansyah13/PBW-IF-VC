Kaka Kalam Djati Permana

---

# 📝 ToDo List REST API

---

## 🚀 Endpoint API

### 1. **Daftar Semua ToDo** - `GET /api.php?action=list`

**Deskripsi:**  
Mengambil daftar semua tugas dari server. Respon akan mencakup detail tugas seperti deskripsi tugas dan status apakah tugas tersebut sudah diselesaikan atau belum.

**Respon:**

```json
[
  {
    "id": 13,
    "task": "Kecerdasan Buatan",
    "is_completed": 0
  },
  {
    "id": 2,
    "task": "Desain UI/UX",
    "is_completed": 0
  }
]
```

---

### 2. **Tambah ToDo Baru** - `POST /api.php?action=add`

**Deskripsi:**  
Menambahkan tugas baru ke dalam daftar ToDo.

**Raw Body:**

```json
{
  "task": "Belajar Rest API"
}
```

**Respon:**

```json
{
  "message": "Todo added successfully!"
}
```

---

### 3. **Menandai ToDo sebagai Selesai** - `PUT /api.php?action=complete`

**Deskripsi:**  
Menandai tugas sebagai selesai ✅.

**Raw Body:**

```json
{
    "id": <id_tugas>,
    "is_completed": 1
}
```

**Respon:**  
Daftar tugas akan dimuat ulang, dan tugas tersebut akan ditandai sebagai selesai 👍.

---

### 4. **Hapus ToDo** - `DELETE /api.php?action=delete`

**Deskripsi:**  
Menghapus tugas dari daftar ToDo 🗑️.

**Raw Body:**

```json
{
  "id": 13
}
```

**Contoh Respon:**  
Tugas akan dihapus dan daftar tugas akan dimuat ulang 🧹.

---

## 💻 Penggunaan Frontend (Aplikasi Web)

1. **Menambah Tugas**:

   - Masukkan tugas baru di kolom input dan klik tombol "Add" (+). Tugas akan dikirim ke API dan ditambahkan ke daftar Anda.

2. **Menandai Tugas sebagai Selesai**:

   - Klik tombol "Mark as completed" ✔️ di samping tugas untuk menandai tugas sebagai selesai.

3. **Menghapus Tugas**:
   - Klik tombol "Delete" 🗑️ di samping tugas untuk menghapus tugas dari daftar.

---

## 📋 Persyaratan

- Server PHP yang berjalan dengan file `api.php` untuk menangani permintaan.
- Library jQuery (sudah disertakan dari CDN).
