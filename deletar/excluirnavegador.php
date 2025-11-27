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
    <?php 
    if (!isset($_GET['id'])) {
        echo "Faltou parâmetro";
        die();
    }
      $id = $_GET['id'];
      // sql com select e marcacao para recebimento de parametro
      $sql = "select * FROM navegador WHERE id_navegador=?";
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
        echo "Navegador não encontrado";
        die();
      }
      // 'pega' o primeiro registro (indice 0) dos $registros - select com where para pk retorna 1 registro
      $navegador = $registros[0];
    ?>

<main>
    <input type="hidden" value="<?=  $id?>" name="id">

    <p>ID: <?=$navegador['id_navegador']?></p>
    <p>Nome: <?=$navegador['nome']?></p>
    <p>Sobrenome: <?=$navegador['sobrenome']?></p>
    <p>Titulo: <?=$navegador['titulo']?></p>
    <p>Origem: <?=$navegador['origem']?></p><br>
    <p>Data de nascimento: <?=$navegador['nascimento']?></p>
    <p>Navio: </p>
    <?php
        $consulta = $mysqli->prepare("select * from navio");
        $consulta->execute();
        
        $resultado = $consulta->get_result();
        $registros = $resultado->fetch_all(MYSQLI_ASSOC);
        
        echo "<select name=\"navio\" id=\"navio\">\n";
        echo "\t<option value=\"\">Selecione</option>\n";
        foreach($registros as $registro) {
            echo "\t<option value=\"{$registro['id_navio']}\"". ($navegador['navio'] == $registro['id_navio'] ? " selected" : "") .">{$registro['nome']}, número {$registro['id_navio']}</option>\n";
        }
        echo "</select>\n";
    ?>                               
    </label>

    <p>Cargo:</p>

    <?php
        $consulta = $mysqli->prepare("select * from cargo");
        $consulta->execute();
        
        $resultado = $consulta->get_result();
        $registros = $resultado->fetch_all(MYSQLI_ASSOC);
        
        echo "<select name=\"cargo\" id=\"cargo\">\n";
        echo "\t<option value=\"\">Selecione</option>\n";
        
        foreach($registros as $registro) {
            echo "\t<option value=\"{$registro['id_cargo']}\"";
            echo ($navegador['cargo'] == $registro['id_cargo'] ? " selected" : "");
            echo ">{$registro['nome']}</option>\n";
        }
        echo "</select>\n";
    ?>
    <br><br>
    <?php
        echo "<a href=\"../deletar/deletenavegador.php?id={$navegador['id_navegador']}\"><button><h3>Apagar todos os registros</h3></button></a>";
    ?>
</main>
</body>
</html>