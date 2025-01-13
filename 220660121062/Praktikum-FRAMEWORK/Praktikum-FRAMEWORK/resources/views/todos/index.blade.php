<!-- resources/views/todos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Todo List</h1>

        <form action="{{ route('todos.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="input-group">
                <input type="text" name="title" class="form-control" placeholder="Add new todo">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>

        <div class="list-group">
            @foreach($todos as $todo)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <form action="{{ route('todos.update', $todo) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }}>
                            <span class="{{ $todo->completed ? 'text-decoration-line-through' : '' }}">
                                {{ $todo->title }}
                            </span>
                        </form>
                    </div>
                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
