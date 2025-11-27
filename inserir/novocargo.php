<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Diário de Bordo</title>
</head>
<body>
    <header>
        <a href="../index.html"><h1>Diário de Bordo</h1></a>
        
    </header>

<main>
    <form action="insertcargo.php" method="get">
        <h2>Novo cargo</h2>
        <label for="nomcargo">Nome <input type="text" id="nomcargo" name="nomcargo"></label><br><br>
        <label for="'desccargo'">Descrição</label><br>
        <textarea name="desccargo" id="desccargo"></textarea>

        <br><br>

        <button type="submit">Enviar</button>
    </form>
</main>
</body>
</html>