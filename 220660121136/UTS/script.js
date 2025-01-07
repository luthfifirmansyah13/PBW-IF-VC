// Menangani penambahan Todo
document.getElementById("add-btn").addEventListener("click", function() {
    const todoInput = document.getElementById("todo-input");
    const inputValue = todoInput.value.trim();

    if (inputValue === "") {
        alert("Please enter a task!");
        return;
    }

    // Membuat elemen baru untuk Todo
    const li = document.createElement("li");

    // Menambahkan checkbox dan tombol hapus pada setiap Todo
    li.innerHTML = `
        <input type="checkbox" class="todo-checkbox">
        <span>${inputValue}</span>
        <button class="delete-btn">Delete</button>
    `;
    
    // Menambahkan Todo ke dalam daftar
    document.getElementById("todo-list").appendChild(li);

    // Mengosongkan input setelah menambahkan
    todoInput.value = "";

    // Menambahkan event listener untuk tombol hapus
    li.querySelector(".delete-btn").addEventListener("click", function() {
        li.remove();
    });

    // Menambahkan event listener untuk checkbox
    li.querySelector(".todo-checkbox").addEventListener("change", function() {
        li.classList.toggle("completed");
    });
});

// Menambahkan event listener untuk Enter key
document.getElementById("todo-input").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        document.getElementById("add-btn").click();
    }
});

function addTodo() {
    const input = document.getElementById("todo-input");
    const inputValue = input.value.trim();

    if (inputValue === "") {
        alert("Please enter a task.");
        return;
    }

    const todoList = document.getElementById("todo-list");
    const li = document.createElement("li");

    li.innerHTML = `
        <input type="checkbox" onclick="toggleCompleted(this)">
        ${inputValue}
        <button class="delete" onclick="deleteTodo(this)">Delete</button>
    `;
    todoList.appendChild(li);
    input.value = "";
}

function toggleCompleted(checkbox) {
    const li = checkbox.parentElement;
    li.classList.toggle("completed");
}

function deleteTodo(button) {
    const li = button.parentElement;
    li.remove();

}