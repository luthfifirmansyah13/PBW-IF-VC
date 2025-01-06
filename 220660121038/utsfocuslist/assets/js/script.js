// assets/js/script.js

document.addEventListener("DOMContentLoaded", function () {
    // Fokus ke input task saat halaman dimuat
    const taskInput = document.querySelector("input[type='text']");
    taskInput.focus();

    // Konfirmasi sebelum menghapus task
    const deleteButtons = document.querySelectorAll(".delete");
    deleteButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            const confirmDelete = confirm("Apakah Anda yakin ingin menghapus tugas ini?");
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });

    // Animasi untuk item yang ditambahkan
    const todoItems = document.querySelectorAll(".todo-item");
    todoItems.forEach(item => {
        item.addEventListener("transitionend", function () {
            item.classList.remove("new");
        });
        item.classList.add("new");
    });
});
