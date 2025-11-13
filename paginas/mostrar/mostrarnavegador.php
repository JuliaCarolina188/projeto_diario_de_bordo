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
        <h2>Tripulação</h2> <br>

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
                ORDER BY n.id_navegador
            ");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);
            
            foreach($registros as $registro) {
                echo "ID: {$registro['id_navegador']}<br>";
                echo "<div style=\"margin-left: 30px;\">";
                    echo "Nome: {$registro['nome']}<br>"; 
                    echo "Sobrenome: {$registro['sobrenome']}<br>";
                    echo "Título: {$registro['titulo']}<br>"; 
                    echo "Origem: {$registro['origem']}<br>";
                    
                    echo "<br>";

                    echo "Data de nascimento: {$registro['nascimento']}<br>";
                    echo "Cargo: {$registro['nome_cargo']}<br>"; 
                    echo "Navio: {$registro['nome_navio']}<br>";

                    echo "<a href=\"../editar/editarnavegador.php?id={$registro['id_navegador']}\">Editar</a> <br>";
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