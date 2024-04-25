<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="seila.php" method="post">
    <label for="usuario">usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="senha">senha</label>
        <input type="text" name="senha" id="senha">
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
<?php

    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $query = "select * from usuario where usuario = $usuario and senha = sha1($senha)";
        $result = mysqli_query($conn,$query);
        if (mysql_num_rows($result)>0) {
            echo("<script>alert('autenticado com sucesso');</script>");
            $usuario = mysql_fetch_assoc($result);
            session_start();
            $_SESSION["usuariologado"] = $usuario["usuario"];
            $_SESSION["perfil"] = $usuario["perfil"];
        } else {
            echo("<script>alert('usuario/senha incorreto.');</script>");
        }
    }



?>