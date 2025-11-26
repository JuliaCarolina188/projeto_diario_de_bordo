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
        <a href="../index.html">Página inicial</a><br>
        <a href="../inserir/novoquipamento.php">Criar novo equipamento</a>
    </header>
<main>
    <section class="mostrartripulacao">
        <h2>Equipamentos</h2> <br>

        <?php
            $consulta = $mysqli->prepare("SELECT * FROM equipamento");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);
            
            foreach($registros as $registro) {
                echo "<strong>{$registro['nome']}</strong><br>"; 
                echo "<div style=\"margin-left: 30px;\">";
                echo "ID: {$registro['id_equipamento']}<br>";
                    echo "Tipo: {$registro['tipo']}<br><br>";
                    echo "{$registro['descricao']}<br>";

                    echo "<a href=\"  ../editar/editarequipamento.php?id_equipamento={$registro['id_equipamento']}  \">Editar</a> ou ";
                    echo "<a href=\"  ../deletar/excluirequipamento.php?id_equipamento={$registro['id_equipamento']}  \">Deletar</a>";
                    
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