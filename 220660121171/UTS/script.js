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
    dataItem.style.display = "flex"; // Menggunakan flexbox untuk data item
    dataItem.style.justifyContent = "space-between"; // Memisahkan konten dan tombol hapus
    dataItem.style.alignItems = "center"; // Menjaga semua elemen tetap sejajar secara vertikal
    dataItem.textContent = `Judul: ${data.title}, Deskripsi: ${data.description}, Tanggal: ${data.date}, Waktu: ${data.time}`;

    // Buat tombol hapus untuk data item
    const deleteButton = document.createElement('button');
    deleteButton.style.backgroundColor = "#FF8A8A";
    deleteButton.style.color = "White";
    deleteButton.style.width = "36px";
    deleteButton.style.height = "36px";
    deleteButton.style.border = "2px solid white"; // Menambahkan border putih
    deleteButton.style.display = "flex"; // Menggunakan flexbox
    deleteButton.style.alignItems = "center"; // Menyejajarkan ikon secara vertikal
    deleteButton.style.justifyContent = "center"; // Memusatkan ikon dalam tombol

    // Ambil SVG dan masukkan ke dalam tombol hapus
    fetch('/220660121171/UTS/assets/IconDelete.svg')
        .then(response => response.text())
        .then(svgData => {
            // Ubah ukuran ikon dengan menambahkan atribut width dan height
            const parser = new DOMParser();
            const svgDoc = parser.parseFromString(svgData, 'image/svg+xml');
            const svgElement = svgDoc.documentElement;

            // Set ukuran ikon sesuai keinginan, misalnya 20x20
            svgElement.setAttribute('width', '20');
            svgElement.setAttribute('height', '20');

            // Masukkan SVG yang sudah diubah ke dalam tombol hapus
            deleteButton.innerHTML = svgElement.outerHTML;
        })
        .catch(error => console.error('Gagal memuat ikon:', error));

    // Event listener untuk tombol hapus
    deleteButton.addEventListener('click', () => {
        dataItem.remove();
    });

    // Tambahkan tombol hapus ke data item
    dataItem.appendChild(deleteButton);

    // Tambahkan elemen ke container penyimpanan
    savedDataContainer.appendChild(dataItem);
}
