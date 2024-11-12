// Menambahkan event listener untuk tombol tambah
document.getElementById('add-btn').addEventListener('click', function() {
    let todoInput = document.getElementById('todo-input');
    let todoText = todoInput.value.trim();
    

    if (todoText === "") {
        return; // Tidak menambahkan item jika input kosong
    }

    let todoList = document.getElementById('todo-list');
    
    // Membuat elemen li baru untuk tugas
    let listItem = document.createElement('li');
    listItem.textContent = todoText;

    // Membuat tombol hapus untuk setiap tugas
    let deleteBtn = document.createElement('button');
    deleteBtn.textContent = "Hapus";
    deleteBtn.className = 'delete-btn';
    
    // Menambahkan event listener untuk tombol hapus
    deleteBtn.addEventListener('click', function() {
        todoList.removeChild(listItem);
    });

    // Menambahkan tombol hapus ke item daftar
    listItem.appendChild(deleteBtn);

    // Menambahkan item ke daftar tugas
    todoList.appendChild(listItem);

    // Mengosongkan input setelah menambahkan tugas
    todoInput.value = "";
});
