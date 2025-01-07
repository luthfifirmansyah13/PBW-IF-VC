// Fungsi untuk menambah tugas baru
function addTodo() {
    const taskInput = document.getElementById("task-input").value.trim();

    if (taskInput === "") {
        alert("Masukkan tugas baru!");
        return;
    }

    fetch('index.php?action=add', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ task: taskInput })
    })
    .then(response => {
        if (!response.ok) throw new Error("Error in network response");
        return response.text();
    })
    .then(data => {
        document.getElementById("todo-list").innerHTML = data; // Update daftar tugas
        document.getElementById("task-input").value = ""; // Bersihkan input
        alert("Tugas berhasil ditambahkan!");
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Gagal menambahkan tugas.");
    });
}

// Fungsi untuk menandai tugas sebagai selesai
function completeTodo(id) {
    fetch(`index.php?action=complete&id=${id}`)
    .then(response => {
        if (!response.ok) throw new Error("Error in network response");
        return response.text();
    })
    .then(data => {
        document.getElementById("todo-list").innerHTML = data; // Update daftar tugas
        alert("Tugas telah selesai!");
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Gagal menandai tugas sebagai selesai.");
    });
}

// Fungsi untuk menghapus tugas
function deleteTodo(id) {
    fetch(`index.php?action=delete&id=${id}`)
    .then(response => {
        if (!response.ok) throw new Error("Error in network response");
        return response.text();
    })
    .then(data => {
        document.getElementById("todo-list").innerHTML = data; // Update daftar tugas
        alert("Tugas berhasil dihapus!");
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Gagal menghapus tugas.");
    });
}
