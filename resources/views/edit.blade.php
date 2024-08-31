<!DOCTYPE html>
<html>
<head>
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('tasks.index') }}">Voltar</a>
</body>
</html>
