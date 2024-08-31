<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tasks.create') }}">Criar Nova Tarefa</a>
    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }}
                <a href="{{ route('tasks.edit', $task) }}">Editar</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
