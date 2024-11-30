// Function to add a new task
function addTask() {
  const taskInput = document.getElementById("taskInput");
  const dateInput = document.getElementById("dateInput");
  const taskText = taskInput.value.trim();
  const taskDate = dateInput.value;

  if (taskText === "" || taskDate === "") {
    alert("Silakan isi tugas dan tanggalnya.");
    return;
  }

  // Create task item elements
  const todoList = document.getElementById("todoList");
  const taskItem = document.createElement("li");
  taskItem.className = "todo-item";

  // Task details (text and date)
  const taskDetails = document.createElement("div");
  taskDetails.className = "todo-details";
  const checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.addEventListener("change", () => {
    taskTextElement.classList.toggle("completed");
  });

  const taskTextElement = document.createElement("span");
  taskTextElement.innerText = `${taskText} - ${taskDate}`;

  taskDetails.appendChild(checkbox);
  taskDetails.appendChild(taskTextElement);

  // Delete button
  const deleteButton = document.createElement("button");
  deleteButton.innerText = "Hapus";
  deleteButton.className = "delete-btn";
  deleteButton.onclick = () => todoList.removeChild(taskItem);

  // Append elements
  taskItem.appendChild(taskDetails);
  taskItem.appendChild(deleteButton);
  todoList.appendChild(taskItem);

  // Clear input fields
  taskInput.value = "";
  dateInput.value = "";
}
