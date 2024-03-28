<?php

    // $host = "localhost";
    // $user = "root";
    // $pass = "";
    // $banco= "CategoriaProduto";
    define("DB_SERVER", "localhost");
    define("DB_USER","crud_user");
    define("DB_PASSWD","fVGO_mfBJUD9zV9W");
    define("DB_NAME","CategoriaProduto");

    //$conn = new mysqli($host , $user , $pass , $banco);
    $conn = new mysqli(DB_SERVER , DB_USER , DB_PASSWD , DB_NAME);

    if($conn->connect_error)
    {
        die("Falha na conexao: " . $conn->connect_error);
    }

?>