<?php
    require_once("../config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleinput.css">
    <title>Diário de Bordo</title>
</head>

<body>
    <header>
        <a href="index.php"><h1>Diário de Bordo</h1></a>
    </header>

    <?php 
    if (!isset($_GET['id_equipamento'])) {
        echo "Faltou parâmetro";
        die();
    }
      $id = $_GET['id_equipamento'];
      // sql com select e marcacao para recebimento de parametro
      $sql = "select * FROM equipamento WHERE id_equipamento=?";
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
        echo "Equipamento não encontrado";
        die();
      }
      // 'pega' o primeiro registro (indice 0) dos $registros - select com where para pk retorna 1 registro
      $equipamento = $registros[0];
    ?>

<main>
    <form action="deletequipamento.php" method="get">
        <p>ID: <?=$equipamento['id_equipamento']?></p>
        <input type="hidden" name="id_equipamento" value="<?=$equipamento['id_equipamento']?>">
        <p>Nome: <?=$equipamento['nome']?></p>
        <p>Tipo: <?=$equipamento['tipo']?></p>
        <p>Descrição: <?=$equipamento['descricao']?></p>

        <input type="submit" value="Apagar equipamento">
    </form>
</main>
</body>
</html>