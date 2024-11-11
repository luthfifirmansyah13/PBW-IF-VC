document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector(".todo-form");
    form.addEventListener("submit", function() {
        alert("Task added successfully!");
    });
});
