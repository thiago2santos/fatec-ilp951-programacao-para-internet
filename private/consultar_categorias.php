<?php
    require_once("conexao.php");
    $query = "SELECT codcategoria, nomecategoria FROM categoria";

    if( isset($_GET["nome_categoria"]) )
    {
        $filtro = $_GET["nome_categoria"];
        $query = $query . " WHERE nomecategoria like '%$filtro%' ";

        $result = mysqli_query($conn, $query);
        while( $linha = mysqli_fetch_assoc($result) )
        {
            $cod = $linha["codcategoria"];
            $nome = $linha["nomecategoria"];
            echo("<tr>");
            echo("<td>$cod</td>");
            echo("<td>$nome</td>");
            echo('<td><a href="#"> <i class="bi bi-pen"></i> </a></td>');
            echo('<td><a href="#"> <i class="bi bi-trash3-fill"></i> </a></td>');
            echo("</tr>");
        }    
    }
?>