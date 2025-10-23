<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "styleinput.css"?></style>
    <style><?php include "styleestrutura.css"?></style>
    <style><?php include "classesids.css"?></style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Diário de Bordo</title>
</head>
<body>
    <header>
        <a href="index.php"><h1>Diário de Bordo</h1></a>
        <nav>
            <a href="editartrip.php">Editar tripulação</a>
            <a href="editararmas.php">Editar Armas</a>
            <a href="editarcargos.php">Editar Cargos</a>
            <a href="editarnavios.php">Editar Navios</a>
        </nav>
    </header>
<main>
    <section>
        <div class="mostrar">
            <h2>Armas</h2>
            <p>lista das armas co a descrição delas</p>
        </div>
        <div class="adicionar">
            <fieldset>
            <legend><h2>Adicionar Arma</h2></legend>
            <label for="nomarma">Nome <input type="text" id="nomarma"></label><br>
            <label for="tiparma">Tipo <input type="text" id="tiparma"></label><br>
            <label for="desarma">Descrição</label><br>
            <textarea name="desarma" id="desarma"></textarea>

            <input type="submit" value="Enviar">

            <p>
                lista das armas que ja existem
            </p>
            </fieldset>
        </div>
    </section>
</main>
</body>
</html>