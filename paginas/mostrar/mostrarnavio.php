<?php
    require_once("../config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diário de Bordo</title>
</head>
<body>
    <header>
        <h1>Diário de Bordo</h1>
        <a href="../index.php">Página inicial</a>
    </header>
<main>
    <section class="mostrartripulacao">
        <h2>Cargos</h2> <br>

        <?php
            $consulta = $mysqli->prepare("SELECT * FROM cargo");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);
            
            foreach($registros as $registro) {
                echo "ID: {$registro['id_cargo']}<br>";
                echo "<div style=\"margin-left: 30px;\">";
                    echo "Nome: {$registro['nome']}<br>";
                    echo "Descrição: {$registro['descricao']}<br>";

                    echo "<a href=\"  ../editar/editarcargo.php?id={$registro['id_navegador']}  \">Editar</a> <br>";
                    echo "<a href=\"  ../deletar/excluircargo.php?id={$registro['id_navegador']}  \">Deletar</a>";
                echo "<br>";
                echo "<br>";
                echo "</div>";
            }
        ?>
        
    </section>

    <hr>
</main>
</body>
</html>