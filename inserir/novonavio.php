<?php
require_once('../config.php')
?>

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
        <h1>Diário de Bordo</h1>
        <a href="../mostrar/mostrarnavio.php">Voltar para navios</a><br>
        <a href="../index.html">Página inicial</a>
        <hr>
    </header>

<main>

    <form action="insertnavio.php" method="get">
        <h2>Novo navio</h2>
        <label for="nomnavio">Nome <input type="text" id="nomnavio" name="nomnavio"></label><br><br>
        <label for="numnavio">Número <input type="number" id="numnavio" name="numnavio"></label><br><br>
        
        <p>Tipo</p>
        <?php 
            $consulta = $mysqli->prepare("SELECT * FROM tipo_navio");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);

            foreach ($registros as $registro) {
                echo "<input type=\"radio\" name=\"tipo\" value=\"{$registro['id_tipo_navio']}\" id=\"tipo{$registro['id_tipo_navio']}\">";
                echo "<label for=\"tipo{$registro['id_tipo_navio']}\"><strong>{$registro['nome']}</strong></label><br>";
                echo "<small>------------- {$registro['descricao']}</small><br><br>";
            }

                
            ?>

        <br><br>

        <button type="submit">Enviar</button>
    </form>
</main>
</body>
</html>