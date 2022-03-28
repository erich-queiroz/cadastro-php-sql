<?php

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $db = "cadastro";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);
        if(!$conexao){
            die("Erro de conexão: ". mysqli_connect_error());
}

?>
