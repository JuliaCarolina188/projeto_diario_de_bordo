<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "style.css"?></style>
    <title>Diário de Bordo</title>
</head>
<body>
    <header>
        <h1>Diário de Bordo</h1>
        <nav>
            <a href="mostrar.php">Ver sua tripulação</a>
            <a href="novo.php">Adicionar novo navegador</a>
            <a href="alterar.php">Editar tripulação</a>
        </nav>
    </header>

    <form action="">
        <h2>Adicionar um novo navegador</h2> <br>
        <label for="nome">Nome <br><input type="text" id="nome" size="50px" placeholder="Odysseu"></label><br>

        <label for="nome">Sobrenome <br><input type="text" id="sobrenome" size="50px" placeholder="Lima"></label><br>

        <label for="nome">Título <br><input type="text" id="nome" size="50px" placeholder="Rei"></label><br>

        <label for="nome">Origem <br><input type="text" id="nome" size="50px" placeholder="De Ítaca"></label><br>
    </form>

    <div class="mostrando">
        <h2>Tripulação</h2>
    </div>
</body>
</html>