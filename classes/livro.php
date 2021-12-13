<?php

require_once('conexao.php');

class livro
{
    public static $id_livro = null;
    public static $nome_livro = null;
    public static $editora = null;
    public static $ano_publicacao_livro = null;
    public static $autor_livro = null;
    public static $descricao_livro = null;

    //-------------------------------------------------------------->
    //#~> Buscar oslivros
    //-------------------------------------------------------------->

    public static function buscarLivro()
    {
        $conexao = Conexao::getConnection();
        $sSQL = $conexao->query(
            "SELECT NOME_LIVRO, EDITORA, ANO_PUBLICACAO, AUTOR, DESCRICAO
             FROM   LIVRO WITH (NOLOCK) ORDER BY DATA_INSERCAO DESC"
        );

        $livro = $sSQL->fetchAll();
        if (!empty($livro)) {
            #...
        }
    }

    //-------------------------------------------------------------->
    //#~> Insere os dados de um livro
    //-------------------------------------------------------------->

    public static function inserirLivro($nomeLivro, $editoraLivro, $anoPublicacaoLivro, $autorLivro, $descricaoLivro)
    {
        $sSQL = "INSERT INTO LIVRO ( 
                   NOME_LIVRO
                 , EDITORA
                 , ANO_PUBLICACAO
                 , AUTOR
                 , DESCRICAO
                 ) 
                 VALUES (
                   '{$nomeLivro}'
                 , '{$editoraLivro}'
                 ,  {$anoPublicacaoLivro}
                 , '{$autorLivro}'
                 , '{$descricaoLivro}'
                 )";

        $conexao = Conexao::getConnection();
        $conexao->query($sSQL);
    }

    //-------------------------------------------------------------->
    //#~> Atualiza os dados de um livro
    //-------------------------------------------------------------->

    public static function atualizarLivro()
    {
        $nomeLivro = isset($nome_livro) ? $nome_livro : '';
        $editoraLivro = isset($editora) ? $editora : '';
        $idLivro = isset($id_livro) ? $id_livro : 0;
        $descricaoLivro = isset($descricao_livro) ? $descricao_livro : '';

        $sSQl = "UPDATE LIVRO SET DESCRICAO_LIVRO = '{$descricaoLivro}', 
                 NOME_LIVRO = '{$nomeLivro}', EDITORA = '{$editoraLivro}' 
                 WHERE ID_LIVRO = {$idLivro}";

        $conexao = Conexao::getConnection();
        $conexao->query($sSQl);
    }

    //-------------------------------------------------------------->
    //#~> Remove um livro
    //-------------------------------------------------------------->

    public static function deletarLivro()
    {
        $idLivro = isset($id_livro) ? $id_livro : 0;

        if (!isset($id_livro)) {
            $sSQl = "DELETE LIVRO WHERE ID_lIVRO = {$idLivro}";

            $conexao = Conexao::getConnection();
            $conexao->query($sSQl);
        }
    }
}
