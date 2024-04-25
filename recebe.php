<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $session_timeout = 60;

    // server should keep session data for AT LEAST 1 hour
    ini_set('session.gc_maxlifetime', $session_timeout);
    // each client should remember their session id for EXACTLY 1 hour
    session_set_cookie_params($session_timeout);
    session_start();
    $now = time();
    $_SESSION['discard_after'] = $now + $session_timeout;

    $_SESSION['nome'] = $nome;
    $_SESSION['idade'] = $idade;

    header("Location:exibe.php");
    
?>