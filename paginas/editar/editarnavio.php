<?php
    require_once("./config.php");
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
        <nav>
            <a href="editartrip.php">Editar tripulação</a>
            <a href="editararmas.php">Editar Armas</a>
            <a href="editarcargos.php">Editar Cargos</a>
            <a href="editarnavios.php">Editar Navios</a>
        </nav>
    </header>


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
    <section>
        <form action="updatenavegador.php" class="formnovo">
            <fieldset>
                <legend class="embacadinho"><h2>Adicionar um novo navegador</h2></legend><br>

                    <div style="display:flex;">

                         <div class="inf1" style="margin:auto;">
                            <input type="hidden" value="<?=  $id?>" name="id">

                            <label for="nome">Nome <br>
                                <input type="text" name="nome" id="nome" size="50px" value="<?=  $navegador['nome']?>">
                            </label><br>

                            <label for="sobrenome">Sobrenome <br>
                                <input type="text" name="sobrenome" id="sobrenome" size="50px" value="<?=  $navegador['sobrenome']?>">
                            </label><br>

                            <label for="titulo">Título <br>
                                <input type="text" name="titulo" id="titulo" size="50px" value="<?=  $navegador['titulo']?>">
                            </label><br>

                            <label for="origem">Origem <br>
                                <input type="text" name="origem" id="origem" size="50px" value="<?=  $navegador['origem']?>">
                            </label><br>
                        </div>
                            
                        <div class="inf1" style="margin:auto;">

                            <label for="nascimento">Data de nascimento<br>
                                <input type="date" name="nascimento" id="nascimento" value="<?=  $navegador['nascimento']?>">
                            </label><br>

                            <label for="navio">De qual navio faz parte? <br>
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
                            </label><br>

                            <label for="cargo">Cargo <br>
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
                            </label><br>

                            <label for="maestria">Adicionar maestria <br>
                                <select name="maestria" id="maestria">
                                    <option value="maestria">nome da arma</option>
                                </select>
                            </label>

                        </div>
                    </div>

                <div style="display: flex; justify-content: space-around;">

                    <label for="foto">Foto de perfil 
                        <input type="file">
                    </label>

                    <button type="submit">Enviar</button>

                </div>    
            </fieldset>
        </form>
    </section>
</main>
</body>
</html>