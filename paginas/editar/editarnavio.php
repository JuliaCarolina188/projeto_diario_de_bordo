<?php
    require_once("../config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleinput.css">
    <link rel="stylesheet" href="styleestrutura.css">
    <link rel="stylesheet" href="classesids.css">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Diário de Bordo</title>
</head>



<body>
    <header>
        <a href="../index.php"><h1>Diário de Bordo</h1></a>
        
    </header>


    <?php 
    if (!isset($_GET['id'])) {
        echo "Faltou parâmetro";
        die();
    }
      $id = $_GET['id'];
      // sql com select e marcacao para recebimento de parametro
      $sql = "select * FROM navio WHERE id_navio=?";
      // preparacao da instrucao
      $consulta = $mysqli->prepare($sql);
      // vincula parametros com indicacao
      $consulta->bind_param("i", $id); // "i" indica que o parametro e inteiro
      // executa a consulta
      $consulta->execute();
      // transfere o resultado da consulta para um array associativo (matriz com linhas e colunas)
      // $res_mt recebe todos registros de meio_transporte - considerando o where, deve haver apenas um registro
      $resultado = $consulta->get_result();
      $registros = $resultado->fetch_all(MYSQLI_ASSOC);
      // se houver quantidade de elementos/registros diferente de 1, deve ser erro
      if (count($registros) != 1) {
        echo "Navio não encontrado";
        die();
      }
      // 'pega' o primeiro registro (indice 0) dos $registros - select com where para pk retorna 1 registro
      $navio = $registros[0];
    ?>

<main>
    <form action="updatenavio.php?id=<?=  $navio['id_navio']?>" method="get">
        <p>ID: <?=  $navio['id_navio']?></p>
        <label for="nome_navio">Nome: </label>
        <input type="text" id="nome_navio" name="nome_navio" value="<?=  $navio['nome']?>">
        <br>
        
        <p>Tipo: </p>
            <?php 
            
                echo "<input type=\"radio\" name=\"tipo\" id=\"1\" value=\"1\" " . ($navio['tipo'] == 1 ? " checked" : "") . "
                <label for=\"1\">Navio de Guerra</label>\n

                <input type=\"radio\" name=\"tipo\" id=\"2\" value=\"2\" " . ($navio['tipo'] == 2 ? " checked" : "") . ">\n
                <label for=\"2\">Navio de Tripulantes</label>\n

                <input type=\"radio\" name=\"tipo\" id=\"3\" value=\"3\" " . ($navio['tipo'] == 3 ? " checked" : "") . ">\n
                <label for=\"3\">Navio de Suprimentos</label>\n

                <input type=\"radio\" name=\"tipo\" id=\"4\" value=\"4\" " . ($navio['tipo'] == 4 ? " checked" : "") . ">\n
                <label for=\"4\">Navio de Tanque</label>\n";
                
            ?>
        
        <br><br>
        <label for="desc_navio">Número: </label>
        <input type="number" name="numero" id="numero" value="<?=  $navio['numero']?>">

        <input type="hidden" name="id" value="<?=  $navio['id_navio']?>">

        <br><br>
        <input type="submit" value="Atualizar navio">
    </form>
</main>
</body>
</html>