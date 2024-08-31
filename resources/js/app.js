import './bootstrap';

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').css('resources/css/app.css', 'public/css');

$(document).ready(function() {
    $('#minhaTabela').DataTable();
});

function adicionarItem() {
    debugger
    alert('Adicionar Item clicado!');
}

function verItem(button) {
   
}

function editarItem(button) {
    
}

function excluirItem(button) {
    if (confirm('Tem certeza que deseja excluir este item?')) {
        const row = $(button).closest('tr');
        $('#minhaTabela').DataTable().row(row).remove().draw();
        alert('Item excluído!');
    }
}
