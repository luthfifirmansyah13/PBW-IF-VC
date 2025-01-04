// Fungsi untuk menambahkan tugas ke dalam daftar
function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskText = taskInput.value.trim();

    // Validasi input
    if (taskText === "") {
        alert("Tugas tidak boleh kosong!");
        return;
    }

    // Buat elemen tugas baru
    const taskList = document.getElementById("taskList");
    const taskItem = document.createElement("li");
    taskItem.classList.add("task-item");

    // Tambahkan teks tugas
    const taskTextNode = document.createElement("span");
    taskTextNode.textContent = taskText;

    // Buat tombol hapus
    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "Hapus";
    deleteBtn.className = "delete-btn";
    deleteBtn.onclick = function() {
        deleteTask(taskItem);
    };

    // Tambahkan teks dan tombol hapus ke elemen tugas
    taskItem.appendChild(taskTextNode);
    taskItem.appendChild(deleteBtn);

    // Tambahkan tugas ke dalam daftar dan reset input
    taskList.appendChild(taskItem);
    taskInput.value = "";

    // Tambahkan animasi saat tugas muncul
    taskItem.classList.add("fade-in");
}

// Fungsi untuk menghapus tugas dari daftar
function deleteTask(taskItem) {
    // Tambahkan animasi hilang
    taskItem.classList.add("fade-out");

    // Tunggu animasi selesai sebelum menghapus elemen
    setTimeout(() => {
        taskItem.remove();
    }, 300);
}

// Fungsi untuk menangani enter key di input
document.getElementById("taskInput").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        addTask();
    }
});
