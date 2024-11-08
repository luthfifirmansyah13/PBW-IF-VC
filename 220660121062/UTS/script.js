// Fungsi untuk menambahkan tugas baru ke daftar
function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskList = document.getElementById("taskList");
    
    // Ambil nilai dari input
    const taskText = taskInput.value.trim();
    
    // Cek apakah input kosong
    if (taskText === "") {
        alert("Please enter a task.");
        return;
    }

    // Buat elemen baru untuk tugas
    const taskItem = document.createElement("li");
    taskItem.textContent = taskText;

    // Tambahkan tombol hapus ke setiap tugas
    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.onclick = () => taskList.removeChild(taskItem);
    taskItem.appendChild(deleteButton);

    // Tambahkan tugas ke daftar
    taskList.appendChild(taskItem);

    // Hapus input setelah menambahkan tugas
    taskInput.value = "";
}
