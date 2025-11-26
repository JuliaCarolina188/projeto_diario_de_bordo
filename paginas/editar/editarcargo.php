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
        <a href="index.php"><h1>Diário de Bordo</h1></a>
        
    </header>


    <?php 
    if (!isset($_GET['id'])) {
        echo "Faltou parâmetro";
        die();
    }
      $id = $_GET['id'];
      // sql com select e marcacao para recebimento de parametro
      $sql = "select * FROM cargo WHERE id_cargo=?";
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
        echo "Cargo não encontrado";
        die();
      }
      // 'pega' o primeiro registro (indice 0) dos $registros - select com where para pk retorna 1 registro
      $cargo = $registros[0];
    ?>

<main>
    <form action="updatecargo.php?id=<?=  $cargo['id_cargo']?>" method="get">
        <p>ID: <?=  $cargo['id_cargo']?></p>
        <label for="nome_cargo">Nome: </label>
        <input type="text" id="nome_cargo" name="nome_cargo" value="<?=  $cargo['nome']?>">
        <br><br>
        
        <label for="desc_cargo">Descrição: </label><br>
        <textarea id="desc_cargo" name="desc_cargo" rows="7" cols="40"><?=  $cargo['descricao']?></textarea>

        <input type="hidden" name="id" value="<?=  $cargo['id_cargo']?>">

        <br><br>
        <input type="submit" value="Atualizar cargo">
    </form>
</main>
</body>
</html>