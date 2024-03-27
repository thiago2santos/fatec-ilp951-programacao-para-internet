<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco= "CategoriaProduto";

    $conn = new mysqli($host , $user , $pass , $banco);

    if($conn->connect_error)
    {
        die("Falha na conexao: " . $conn->connect_error);
    }
    echo("Carregoou credenciais");
?>