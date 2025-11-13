<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">

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
            <h2>Cargos</h2>
            <p>lista dos cargos com a descrição deles</p>
        </div>

        <div class="adicionar">
            <fieldset>
                <legend><h2>Adicionar Cargo</h2></legend>

                <label for="nomcargo">Nome <input type="text" id="nomcargo"></label><br>
                <label for="desccargo">Descrição</label><br>
                <textarea name="" id="desccargo"></textarea>

                <br>

                <button type="submit">Enviar</button>
            </fieldset>
        </div>
    </section>
</main>
</body>
</html>