<!DOCTYPE html>
<html>
<head>
    <title>Criar Tarefa</title>
</head>
<body>
    <h1>Criar Nova Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('tasks.index') }}">Voltar</a>
</body>
</html>
