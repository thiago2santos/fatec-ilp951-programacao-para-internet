<?php
    $nome = "nome nao recebido";
    $idade = 0;
    $session_timeout = 60;

    // server should keep session data for AT LEAST 1 hour
    ini_set('session.gc_maxlifetime', $session_timeout);
    // each client should remember their session id for EXACTLY 1 hour
    session_set_cookie_params($session_timeout);
    session_start(); // ready to go!
    $now = time();
    if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
        // this session has worn out its welcome; kill it and start a brand new one
        session_unset();
        session_destroy();
        header("Location:index.php");
    }

    if (isset($_SESSION["nome"]) && isset($_SESSION["idade"])) {
        if ($_SESSION["nome"]!=null && $_SESSION["idade"]!=null) {
            $nome = $_SESSION['nome'];
            $idade = $_SESSION['idade'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe</title>
</head>
<body>
    <h1>Página de exibição</h1>
    <p>Nome: <?php echo($nome); ?></p>
    <p>Idade: <?php echo($idade); ?></p>
    <hr>
    <form action="sair.php" method="post">
        <input type="submit" value="Sair">
    </form>
</body>
</html>