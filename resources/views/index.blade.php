<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <title>Lista de Tarefas</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="#" class="nav-link active" class="btn btn-add" onclick="adicionarItem() aria-current="page">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar Item</font></font>
                </a>
            </li>
          </ul>
        </header>
    </div>

    <div class="d-flex justify-content-center">
        <table id="minhaTabela" class="display">
            <thead>
                <tr>
                    <th>Tarefa</th>
                    <th>Tipo Tarefa</th>
                    <th>Data Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João</td>
                    <td>25</td>
                    <td>São Paulo</td>
                    <td>
                        <button class="btn btn-view" onclick="verItem(this)">Ver</button>
                        <button class="btn btn-edit" onclick="editarItem(this)">Editar</button>
                        <button class="btn btn-delete" onclick="excluirItem(this)">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#minhaTabela').DataTable();
        });
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
