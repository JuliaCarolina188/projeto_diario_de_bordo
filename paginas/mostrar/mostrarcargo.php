<?php
    require_once("../config.php");
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
    </header>
<main>
    <h2>Cargos</h2> 
    <a href="../inserir/novocargo.php">Adiconar novo cargo</a><br>
    <a href="../index.html">Página inicial</a> <br><br>

    <?php
        $consulta = $mysqli->prepare("SELECT cargo.id_cargo, cargo.nome as nome_cargo, cargo.descricao, navegador.nome,   navegador.id_navegador, navegador.origem FROM cargo LEFT JOIN navegador  ON navegador.cargo = cargo.id_cargo ORDER BY cargo.id_cargo");
        $consulta->execute();
        
        $resultado = $consulta->get_result();
        $registros = $resultado->fetch_all(MYSQLI_ASSOC);
        
        foreach($registros as $registro) {
            echo "<strong>{$registro['nome_cargo']}</strong><br>";
            echo "<div style=\"margin-left: 30px;\">";
                echo "ID: {$registro['id_cargo']}<br>";
                echo "{$registro['descricao']}<br>";

                echo "<br>";
                echo "Principal pessoa com esse cargo:<br>";
                echo "<strong>{$registro['nome']}</strong>";
                echo "<br><br><a href=\"  ../editar/editarcargo.php?id_cargo={$registro['id_cargo']}  \">Editar</a> ou ";
                echo "<a href=\"  ../deletar/excluircargo.php?id_cargo={$registro['id_cargo']}  \">Deletar</a>";
            echo "<br>";
            echo "<br>";
            echo "</div>";
        }
    ?>
    <hr>
</main>
</body>
</html>