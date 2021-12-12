$(function () {

    //-------------------------------------------------------------->
    
    function limparCampos() {
        document.getElementById('nome_livro').value = null;
        document.getElementById('editora_livro').value = null;
        document.getElementById('ano_publicacao').value = null;
        document.getElementById('autor_livro').value = null;
        document.getElementById('descricao_livro').value = null;
    }

    //-------------------------------------------------------------->


    $('#limpar_campos').click(function () {
        limparCampos();
    });
});