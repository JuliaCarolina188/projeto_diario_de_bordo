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
        <a href="../inserir/novonavio.php">Adicionar novo navio</a><br>
        <a href="../index.html">Página inicial</a>
        <hr>
    </header>
<main>
    <section class="mostrartripulacao">
        <h2>Sobre os navios da embarcação</h2> <br>

        <?php
            $consulta = $mysqli->prepare("SELECT 
                                                    navio.id_navio, 
                                                    navio.nome AS nome_navio, 
                                                    navio.tipo as navio_tipo, 
                                                    navio.numero, 
                                                    tipo_navio.nome AS nome_tipo, 
                                                    tipo_navio.descricao AS desc_navio
                                                FROM navio 
                                                JOIN tipo_navio ON navio.tipo = tipo_navio.id_tipo_navio
                                                ");
            $consulta->execute();
            
            $resultado = $consulta->get_result();
            $registros = $resultado->fetch_all(MYSQLI_ASSOC);
            
            foreach($registros as $registro) {
                echo "<strong>{$registro['nome_navio']}</strong><br>";
                echo "<div style=\"margin-left: 30px;\">";
                    echo "ID: {$registro['id_navio']}<br>";
                    echo "{$registro['nome_tipo']}<br>";
                    echo "{$registro['desc_navio']}<br>";
                    echo "<a href=\"  ../editar/editarnavio.php?id_navio={$registro['id_navio']}  \">Editar</a> ou ";
                    echo "<a href=\"../deletar/excluirnavio.php?id_navio={$registro['id_navio']}\">Deletar</a>";

                echo "<br>";
                echo "<br>";
                echo "</div>";
            }
        ?>
        
    </section>
</main>
</body>
</html>