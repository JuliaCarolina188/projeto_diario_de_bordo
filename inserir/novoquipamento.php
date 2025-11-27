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
        <a href="../index.php"><h1>Diário de Bordo</h1></a>
    </header>
<main>
    <section>
        <form action="insertequipamento.php" method="get">
            <h2>Adicionar Arma</h2>
            
            <label for="nome_equipamento">Nome <input type="text" id="nome_equipamento" name="nome_equipamento"></label><br>

            <label for="tipo_equipamento">Tipo <input type="text" id="tipo_equipamento" name="tipo_equipamento"></label><br>

            <label for="desc_equipamento">Descrição</label><br>
            <textarea name="desc_equipamento" id="desc_equipamento"></textarea>

            <br>

            <button type="submit">Enviar</button>
        </form>

    </section>
</main>
</body>
</html>