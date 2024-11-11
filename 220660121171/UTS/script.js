// Ambil elemen yang diperlukan dari DOM
const titleInput = document.getElementById('todo-title');
const descriptionInput = document.getElementById('todo-description');
const dateInput = document.getElementById('todo-date');
const timeInput = document.getElementById('todo-time');
const categoryInput = document.getElementById('todo-category');
const priorityInput = document.getElementById('todo-priority');
const addButton = document.getElementById('add-todo');
const savedDataContainer = document.getElementById('saved-data');
const deleteSelectedButton = document.getElementById('delete-selected');

// Event listener untuk tombol "Tambah"
addButton.addEventListener('click', addTodo);
deleteSelectedButton.addEventListener('click', deleteSelectedItems);

function addTodo() {
    // Ambil nilai dari form input
    const title = titleInput.value;
    const description = descriptionInput.value;
    const date = dateInput.value;
    const time = timeInput.value;
    const category = categoryInput.value;
    const priority = priorityInput.value;

    // Validasi input
    if (!title || !description || !date || !time || !category || !priority) {
        alert('Harap isi semua kolom.');
        return;
    }

    // Simpan data todo ke area penyimpanan
    const todoData = { title, description, date, time, category, priority };
    saveData(todoData);

    // Bersihkan input form setelah menambahkan
    titleInput.value = '';
    descriptionInput.value = '';
    dateInput.value = '';
    timeInput.value = '';
    categoryInput.value = '';
    priorityInput.value = '';
}

// Fungsi untuk menyimpan data dan menampilkan di area penyimpanan
function saveData(data) {
    // Buat elemen data penyimpanan baru
    const dataItem = document.createElement('div');
    dataItem.classList.add('data-item');

    // Tambahkan elemen detail untuk judul, deskripsi, tanggal, waktu, kategori, dan prioritas
    const titleElement = document.createElement('div');
    titleElement.innerHTML = `<strong>Judul:</strong> ${data.title}`;
    dataItem.appendChild(titleElement);

    const descriptionElement = document.createElement('div');
    descriptionElement.innerHTML = `<strong>Deskripsi:</strong> ${data.description}`;
    dataItem.appendChild(descriptionElement);

    const dateTimeElement = document.createElement('div');
    dateTimeElement.innerHTML = `<strong>Tanggal:</strong> ${data.date}, <strong>Waktu:</strong> ${data.time}`;
    dataItem.appendChild(dateTimeElement);

    const categoryElement = document.createElement('div');
    categoryElement.innerHTML = `<strong>Kategori:</strong> ${data.category}`;
    dataItem.appendChild(categoryElement);

    const priorityElement = document.createElement('div');
    priorityElement.innerHTML = `<strong>Prioritas:</strong> ${data.priority}`;
    dataItem.appendChild(priorityElement);

    // Tambahkan checkbox untuk menghapus item
    const deleteCheckbox = document.createElement('input');
    deleteCheckbox.type = 'checkbox';
    deleteCheckbox.ariaLabel = 'Pilih untuk dihapus';
    deleteCheckbox.classList.add('delete-checkbox');

    // Tambahkan checkbox ke data item
    dataItem.appendChild(deleteCheckbox);

    // Tambahkan elemen ke container penyimpanan
    savedDataContainer.appendChild(dataItem);
}

// Fungsi untuk menghapus semua item yang dipilih
function deleteSelectedItems() {
    // Ambil semua checkbox yang tercentang
    const checkboxes = document.querySelectorAll('.delete-checkbox');
    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            checkbox.parentElement.remove();
        }
    });
}
