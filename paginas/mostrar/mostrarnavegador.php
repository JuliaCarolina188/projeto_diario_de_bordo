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
    </header>
<main>
    <section class="mostrartripulacao">
        <h2>Sobre sua Tripulação</h2> <br>
        <a href="../inserir/novonav.php">Adicionar novo navegador</a><br>
        <a href="../index.html">Página inicial</a><br><br>
        <a href=""></a>

        <?php
            $consulta = $mysqli->prepare("
                SELECT
                    n.*, c.nome AS nome_cargo, v.nome AS nome_navio
                FROM
                    navegador n
                INNER JOIN
                    cargo c ON n.cargo = c.id_cargo
                INNER JOIN
                    navio v ON n.navio = v.id_navio
                ORDER BY n.cargo
            ");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);
            
            foreach($registros as $registro) {
                echo "ID: {$registro['id_navegador']}<br>";
                echo "<div style=\"margin-left: 30px;\">";
                    echo "{$registro['nome']} {$registro['sobrenome']} \"<strong>{$registro['titulo']}</strong>\" de {$registro['origem']}<br>"; 
                    
                    echo "<br>";

                    echo "Nascido em {$registro['nascimento']}, <strong>{$registro['nome_cargo']}</strong> da embarcação,<br>";
                    echo "<strong>\"{$registro['nome_navio']}\"</strong>, numero {$registro['navio']}<br>";

                    echo "<a href=\"../editar/editarnavegador.php?id={$registro['id_navegador']}\">Editar</a> ou ";
                    echo "<a href=\"../deletar/excluirnavegador.php?id={$registro['id_navegador']}\">Deletar</a>";
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