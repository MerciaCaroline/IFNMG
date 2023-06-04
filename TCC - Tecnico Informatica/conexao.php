<?php
function conecta_mysql(){
    // Aqui faz a conexão com o banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $nome_bd = "my_home";
 
    $conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
    mysqli_set_charset($conexao, "utf8");
 
    return $conexao;
}
 
 
?>