// Ambil elemen DOM
const addButton = $('#add-btn');
const todoInput = $('#todo-input');
const todoList = $('#todo-list');

// Fungsi untuk menambah item Todo
function addTodo() {
    const todoText = todoInput.val().trim();
    if (todoText === '') return;

    const li = $('<li>', { class: 'flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-md transition transform hover:scale-105' });
    const todoItem = $('<span>', { class: 'flex-1' }).text(todoText);

    // Checkbox
    const checkbox = $('<input>', { type: 'checkbox' }).on('click', function() {
        toggleCompleted(li, checkbox);
    }).addClass('mr-4');

    // Edit Button
    const editButton = $('<button>', { class: 'text-yellow-500 hover:text-yellow-600' }).text('✏️').on('click', function() {
        editTodo(todoItem, li);
    });

    // Delete Button
    const deleteButton = $('<button>', { class: 'text-red-500 hover:text-red-600' }).text('❌').on('click', function() {
        deleteTodo(li);
    });

    li.append(checkbox, todoItem, editButton, deleteButton);
    todoList.append(li);

    // Simpan Todo ke localStorage
    saveTodos();

    // Kosongkan input setelah menambah
    todoInput.val('');
}

// Fungsi untuk mengedit item Todo
function editTodo(todoItem, li) {
    const newTodo = prompt('Edit tugas:', todoItem.text());
    if (newTodo !== null && newTodo.trim() !== '') {
        todoItem.text(newTodo.trim());
        saveTodos();  // Simpan ulang setelah edit
    }
}

// Fungsi untuk menghapus item Todo
function deleteTodo(li) {
    li.remove();
    saveTodos();  // Simpan ulang setelah hapus
}

// Fungsi untuk menandai Todo sebagai selesai
function toggleCompleted(li, checkbox) {
    if (checkbox.prop('checked')) {
        li.addClass('completed');
    } else {
        li.removeClass('completed');
    }
    saveTodos();  // Simpan ulang setelah menandai selesai
}

// Fungsi untuk menyimpan daftar Todo ke localStorage
function saveTodos() {
    const todos = [];
    todoList.find('li').each(function() {
        const todoText = $(this).find('span').text();
        const isCompleted = $(this).hasClass('completed');
        todos.push({ text: todoText, completed: isCompleted });
    });
    localStorage.setItem('todos', JSON.stringify(todos));
}

// Fungsi untuk memuat Todo List dari localStorage
function loadTodos() {
    const savedTodos = JSON.parse(localStorage.getItem('todos'));
    if (savedTodos) {
        savedTodos.forEach(todo => {
            const li = $('<li>', { class: 'flex justify-between items-center p-4 bg-gray-50 rounded-lg shadow-md transition transform hover:scale-105' });
            const todoItem = $('<span>', { class: 'flex-1' }).text(todo.text);
            
            // Checkbox
            const checkbox = $('<input>', { type: 'checkbox', checked: todo.completed }).on('click', function() {
                toggleCompleted(li, checkbox);
            }).addClass('mr-4');

            // Edit Button
            const editButton = $('<button>', { class: 'text-yellow-500 hover:text-yellow-600' }).text('✏️').on('click', function() {
                editTodo(todoItem, li);
            });

            // Delete Button
            const deleteButton = $('<button>', { class: 'text-red-500 hover:text-red-600' }).text('❌').on('click', function() {
                deleteTodo(li);
            });

            li.append(checkbox, todoItem, editButton, deleteButton);
            if (todo.completed) {
                li.addClass('completed');
            }
            todoList.append(li);
        });
    }
}

// Event Listener untuk menambahkan Todo
addButton.on('click', addTodo);

// Muat Todo List saat halaman dimuat
$(document).ready(loadTodos);
