const todoList = document.getElementById('todoList');
const todoInput = document.getElementById('todoInput');

// Fungsi untuk menambahkan todo baru
function addTodo() {
    const todoText = todoInput.value.trim();
    if (todoText === '') return;

    const listItem = document.createElement('li');
    listItem.className = 'todo-item';

    // Teks Todo
    const textSpan = document.createElement('span');
    textSpan.className = 'todo-text';
    textSpan.innerText = todoText;

    // Tombol Edit
    const editButton = document.createElement('button');
    editButton.innerText = 'Edit';
    editButton.className = 'edit-btn';
    editButton.onclick = () => toggleEditMode(textSpan, editButton);

    // Tombol Hapus
    const deleteButton = document.createElement('button');
    deleteButton.innerText = 'Hapus';
    deleteButton.className = 'delete-btn';
    deleteButton.onclick = () => listItem.remove();

    listItem.appendChild(textSpan);
    listItem.appendChild(editButton);
    listItem.appendChild(deleteButton);

    todoList.appendChild(listItem);
    todoInput.value = '';
}

// Fungsi untuk toggle antara edit mode dan view mode
function toggleEditMode(textSpan, editButton) {
    if (editButton.innerText === 'Edit') {
        // Masuk ke mode edit
        const editInput = document.createElement('input');
        editInput.type = 'text';
        editInput.value = textSpan.innerText;
        editInput.className = 'edit-input';

        textSpan.replaceWith(editInput);
        editButton.innerText = 'Simpan';

        // Fokus pada input edit
        editInput.focus();

        // Simpan perubahan ketika tombol "Simpan" diklik
        editButton.onclick = () => saveEdit(editInput, textSpan, editButton);
    }
}

// Fungsi untuk menyimpan perubahan
function saveEdit(editInput, textSpan, editButton) {
    const newText = editInput.value.trim();
    if (newText !== '') {
        textSpan.innerText = newText;
    }

    editInput.replaceWith(textSpan);
    editButton.innerText = 'Edit';

    // Kembali ke fungsi toggleEditMode agar bisa diedit kembali
    editButton.onclick = () => toggleEditMode(textSpan, editButton);
}
