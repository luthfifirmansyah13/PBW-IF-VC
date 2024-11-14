<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>To-Do List</h1>

    <form method="post" action="index.php?action=add">
        <input type="text" name="task" placeholder="Tambahkan tugas baru" required>
        <select name="category">
            <option value="Morning Routine">Morning Routine</option>
            <option value="Afternoon Routine">Afternoon Routine</option>
            <option value="Night Routine">Night Routine</option>
        </select>
        <button type="submit">Tambah</button>
    </form>

    <?php 
    $categories = ['Morning Routine', 'Afternoon Routine', 'Night Routine'];
    foreach ($categories as $category): 
    ?>
        <div class="card">
            <h2><?php echo htmlspecialchars($category); ?></h2>
            <ul>
                <?php 
                foreach ($todos as $todo): 
                    if ($todo['category'] == $category): 
                ?>
                    <li>
                        <!-- Form untuk mengupdate status checkbox -->
                        <form method="post" action="index.php?action=toggleComplete&id=<?php echo $todo['id']; ?>" style="display: inline;">
                            <input type="checkbox" name="complete" onchange="this.form.submit()" <?php echo $todo['is_completed'] ? 'checked' : ''; ?>>
                        </form>
                        <span class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                            <?php echo htmlspecialchars($todo['task']); ?>
                        </span>
                        <a href="index.php?action=delete&id=<?php echo $todo['id']; ?>" class="delete-btn">
                            <i class="fas fa-trash"></i> <!-- Ikon sampah -->
                        </a>
                    </li>
                <?php 
                    endif;
                endforeach; 
                ?>
            </ul>
        </div>
    <?php endforeach; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
