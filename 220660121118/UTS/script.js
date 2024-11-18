document.addEventListener('DOMContentLoaded', () => {
    const taskInput = document.getElementById('taskInput');
    const addTaskButton = document.getElementById('addTask');
    const routineType = document.getElementById('routineType');
    const clearCheckboxButton = document.getElementById('clearCheckbox');
    const clearDataButton = document.getElementById('clearData');
    const routineContainers = {
        morning: document.querySelector('#morningTasks .task-list'),
        afternoon: document.querySelector('#afternoonTasks .task-list'),
        evening: document.querySelector('#eveningTasks .task-list')
    };

    // Load tasks from localStorage
    let tasks = JSON.parse(localStorage.getItem('routineTasks')) || {
        morning: [],
        afternoon: [],
        evening: []
    };

    // Function to save tasks to localStorage
    const saveTasks = () => {
        localStorage.setItem('routineTasks', JSON.stringify(tasks));
    };

    // Function to create task element
    const createTaskElement = (task, routine, index) => {
        const li = document.createElement('li');
        li.className = `task-item ${task.completed ? 'completed' : ''}`;
        li.innerHTML = `
            <input type="checkbox" class="task-checkbox" ${task.completed ? 'checked' : ''}>
            <span class="task-text">${task.text}</span>
            <button class="delete-btn" data-routine="${routine}" data-index="${index}">Delete</button>
        `;

        // Add event listener for checkbox
        const checkbox = li.querySelector('.task-checkbox');
        checkbox.addEventListener('change', () => {
            task.completed = checkbox.checked;
            li.classList.toggle('completed', task.completed);
            saveTasks();
        });

        return li;
    };

    // Function to render tasks
    const renderTasks = () => {
        for (let routine in routineContainers) {
            const container = routineContainers[routine];
            container.innerHTML = '';
            
            tasks[routine].forEach((task, index) => {
                const taskElement = createTaskElement(task, routine, index);
                container.appendChild(taskElement);
            });
        }
    };

    // Add new task
    const addTask = () => {
        const text = taskInput.value.trim();
        const routine = routineType.value;
        
        if (text) {
            tasks[routine].push({
                text,
                completed: false
            });
            taskInput.value = '';
            saveTasks();
            renderTasks();
        }
    };

    // Delete task
    const deleteTask = (routine, index) => {
        tasks[routine].splice(index, 1);
        saveTasks();
        renderTasks();
    };

    // Clear all checkboxes
    const clearAllCheckboxes = () => {
        for (let routine in tasks) {
            tasks[routine].forEach(task => {
                task.completed = false;
            });
        }
        saveTasks();
        renderTasks();
    };

    // Clear all data
    const clearAllData = () => {
        if (confirm('Are you sure you want to clear all data? This action cannot be undone.')) {
            tasks = {
                morning: [],
                afternoon: [],
                evening: []
            };
            saveTasks();
            renderTasks();
        }
    };

    // Event Listeners
    addTaskButton.addEventListener('click', addTask);

    taskInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            addTask();
        }
    });

    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('delete-btn')) {
            const routine = e.target.dataset.routine;
            const index = parseInt(e.target.dataset.index);
            deleteTask(routine, index);
        }
    });

    clearCheckboxButton.addEventListener('click', clearAllCheckboxes);
    clearDataButton.addEventListener('click', clearAllData);

    // Initial render
    renderTasks();
});