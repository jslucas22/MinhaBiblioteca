window.onload = limparCampos();

//-------------------------------------------------------------->

function limparCampos() {

    document.querySelector("#limpar_campos").onclick = function () {

        document.getElementById('nome_livro').value = null;
        document.getElementById('editora_livro').value = null;
        document.getElementById('ano_publicacao_livro').value = null;
        document.getElementById('autor_livro').value = null;
        document.getElementById('descricao_livro').value = null;
    }
}