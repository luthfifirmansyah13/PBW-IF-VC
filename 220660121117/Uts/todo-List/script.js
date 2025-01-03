const todoList = document.getElementById("todoList");
const todoInput = document.getElementById("todoInput");
const titleInput = document.getElementById("titleInput");

// Event listener untuk menambah task dengan tombol "Enter"
todoInput.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        addTodo();
    }
});

function addTodo() {
    const taskText = todoInput.value.trim();
    const titleText = titleInput.value.trim();
    if (taskText === "" || titleText === "") {
        console.log("Task atau Judul kosong, tidak ditambahkan.");
        return;
    }

    const card = document.createElement("div");
    card.className = "bg-white p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col mb-4"; // Menambahkan class card untuk gaya

    // Judul card
    const title = document.createElement("h3");
    title.textContent = titleText;
    title.className = "text-indigo-500 text-xl font-bold mb-2";

    // Input untuk edit judul
    const titleEditInput = document.createElement("input");
    titleEditInput.type = "text";
    titleEditInput.value = titleText;
    titleEditInput.className = "hidden mb-2"; // Sembunyikan input pada awalnya

    const task = document.createElement("span");
    task.textContent = taskText;
    task.className = "text-gray-800 text-lg font-semibold mb-4 flex-grow"; // flex-grow untuk mengisi ruang yang tersedia

    // Input untuk edit task
    const taskEditInput = document.createElement("input");
    taskEditInput.type = "text";
    taskEditInput.value = taskText;
    taskEditInput.className = "hidden mt-2"; // Sembunyikan input pada awalnya

    // Container untuk tombol Edit dan Delete
    const buttonContainer = document.createElement("div");
    buttonContainer.className = "flex justify-between mt-4";

    // Tombol Edit
    const editBtn = document.createElement("button");
    editBtn.textContent = "Edit";
    editBtn.className = "bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600";
    editBtn.onclick = function() {
        // Toggle edit mode untuk judul
        if (titleEditInput.classList.contains("hidden")) {
            titleEditInput.classList.remove("hidden");
            title.classList.add("hidden");

            // Toggle edit mode untuk task
            taskEditInput.classList.remove("hidden");
            task.classList.add("hidden");

            editBtn.textContent = "Save";
        } else {
            // Simpan judul baru
            title.textContent = titleEditInput.value;
            titleEditInput.classList.add("hidden");
            title.classList.remove("hidden");

            // Simpan task baru
            task.textContent = taskEditInput.value;
            taskEditInput.classList.add("hidden");
            task.classList.remove("hidden");

            editBtn.textContent = "Edit";
        }
    };

    // Tombol Delete
    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "Delete";
    deleteBtn.className = "bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600";
    deleteBtn.onclick = function() {
        card.remove();
    };

    // Tambahkan elemen-elemen ke dalam card
    card.appendChild(title);
    card.appendChild(titleEditInput);
    card.appendChild(task);
    card.appendChild(taskEditInput);
    buttonContainer.appendChild(editBtn);
    buttonContainer.appendChild(deleteBtn);
    card.appendChild(buttonContainer);

    // Tambahkan card ke todoList
    todoList.appendChild(card);

    // Kosongkan input setelah task ditambahkan
    titleInput.value = "";  // Kosongkan input judul
    todoInput.value = "";   // Kosongkan input task
}
