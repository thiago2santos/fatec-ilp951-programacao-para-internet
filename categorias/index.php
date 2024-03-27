<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="txtCodCategoria">Codigo da Categoria:</label>
        <input type="text" name="txtCodCategoria" readonly value="(Automatico)" />
        <br />
        <label for="txtNomeCategoria">Nome da Categoria</label>
        <input type="text" name="txtNomeCategoria" max-lenght="50"/>
        <br />
        <input type="submit" value="Cadastrar Categoria" />
    </form>
    <?php
        if( isset($_POST["txtNomeCategoria"]) )
        {
            $NOME = $_POST["txtNomeCategoria"];
            //include("conexao.php");
            include_once("../private/conexao.php"); //Adicionei a conexao com o BD (mysql)
            $query = "INSERT INTO categoria(nomecategoria) VALUES('$NOME')";
            $result = mysqli_query($conn , $query);
            echo("<script>alert('Categoria Cadastrada');</script>");
        }
    ?>
</body>
</html>