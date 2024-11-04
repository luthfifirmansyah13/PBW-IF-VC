// Ambil elemen yang diperlukan dari DOM
const titleInput = document.getElementById('todo-title');
const descriptionInput = document.getElementById('todo-description');
const dateInput = document.getElementById('todo-date');
const timeInput = document.getElementById('todo-time');
const addButton = document.getElementById('add-todo');
const savedDataContainer = document.getElementById('saved-data');

// Event listener untuk tombol "Tambah"
addButton.addEventListener('click', addTodo);

function addTodo() {
    // Ambil nilai dari form input
    const title = titleInput.value;
    const description = descriptionInput.value;
    const date = dateInput.value;
    const time = timeInput.value;

    // Validasi input, pastikan tidak ada input yang kosong
    if (!title || !description || !date || !time) {
        alert('Harap isi semua kolom.');
        return;
    }

    // Simpan data todo ke area penyimpanan
    const todoData = { title, description, date, time };
    saveData(todoData);

    // Bersihkan input form setelah menambahkan
    titleInput.value = '';
    descriptionInput.value = '';
    dateInput.value = '';
    timeInput.value = '';
}

// Fungsi untuk menyimpan data dan menampilkan di area penyimpanan
function saveData(data) {
    // Buat elemen data penyimpanan baru
    const dataItem = document.createElement('div');
    dataItem.classList.add('data-item');
    dataItem.textContent = `Judul: ${data.title}, Deskripsi: ${data.description}, Tanggal: ${data.date}, Waktu: ${data.time}`;

    // Buat tombol hapus untuk data item
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Hapus';
    deleteButton.addEventListener('click', () => {
        dataItem.remove();
    });

    // Tambahkan tombol hapus ke data item
    dataItem.appendChild(deleteButton);

    // Tambahkan elemen ke container penyimpanan
    savedDataContainer.appendChild(dataItem);
}
