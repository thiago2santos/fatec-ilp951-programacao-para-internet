<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Consultar Categorias</h1>
    <hr>
    <form action="index.php" method="get">
        <label for="nome_categoria">Filtrar por nome:</label>
        <input type="text" name="nome_categoria" id="nome_categoria" autofocus>
        <input type="submit" value="Filtrar">
        <input type="button" value="Voltar" onClick="window.location.href='../../index.php'">
    </form>
    <hr>
    <table>
        <tr>
            <th id="codigo">Código</th>
            <th id="nome">Nome da Categoria</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
        </tr>
        <?php require_once("../../private/consultar_categorias.php") ?>        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>