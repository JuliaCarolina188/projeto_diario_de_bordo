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
            <h2>Navios</h2>
            <p>lista dos tipos de navios e quais navios já tem na navegação</p>
        </div>

        <div class="adicionar">
            <fieldset>
                <legend><h2>Adicionar Navio</h2></legend>

                <label for="arma">Nome <input type="text"></label><br>

                <label for="tiponavio">Tipo </label>
                <select name="tiponavio" id="tiponavio">
                    <option value="1" selected>Número 1</option>
                    <option value="2">Número 2</option>
                    <option value="3">Número 3</option>
                    <option value="4">Número 4</option>
                </select>
                <br><br>

                <button type="submit">Enviar</button>
            </fieldset>
        </div>
    </section>
</main>
</body>
</html>