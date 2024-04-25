<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pagina Inicial</title>
    </head>
    <body>
        <h1>Pagina Principal</h1>
        <hr />
        <h2><a href="categoriaCAD.php">Cadastrar Categorias</a></h2>
        <h2><a href="#">Consultar Categorias</a></h2>
        <h2><a href="#">Cadastrar Produtos</a></h2>
        <h2><a href="#">Consultar Produtos</a></h2>
        <hr />
        <h2><a href="#">Cadastrar Cliente</a></h2>
        <h2><a href="#">Consultar Cliente</a></h2>
        <h2><a href="#">Cadastrar Endereco</a></h2>
        <h2><a href="#">Consultar Endereco</a></h2>
        <hr />
        <div>
            <form action="recebe.php" method="post">
                <div>
                    <label for="nome">Digite seu nome:</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div>
                    <label for="idade">digite sua idade </label>
                    <input type="text" name="idade" id="idade" />
                </div>
                <div>
                    <input type="submit" value="Enviar" />
                </div>
            </form>
        </div>
    </body>
</html>
