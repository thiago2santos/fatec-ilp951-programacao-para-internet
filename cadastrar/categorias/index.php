<?php
    if( isset($_POST["txtNomeCategoria"]) && $_POST["txtNomeCategoria"] !== '' ) {
        $NOME = $_POST["txtNomeCategoria"];
        //include("conexao.php");
        include_once("../../private/conexao.php"); //Adicionei a conexao com o BD (mysql)
        $query = "INSERT INTO categoria(nomecategoria) VALUES('$NOME')";
        $result = mysqli_query($conn , $query);
        echo("<script>alert('Categoria Cadastrada');</script>");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
</head>

<body>
    <h1>Cadastrar Categorias</h1>
    <hr>
    <form action="index.php" method="POST">
        <!-- <label for="txtCodCategoria">Codigo da Categoria:</label>
        <input type="text" name="txtCodCategoria" readonly value="(Automatico)" /> -->
        <table>
            <tr>
                <td><label for="txtNomeCategoria">Nome da Categoria</label></td>
                <td><input type="text" name="txtNomeCategoria" max-lenght="50" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Cadastrar" />
                    <input type="button" value="Voltar" onClick="window.location.href='../../index.php'">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>