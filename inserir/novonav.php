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
    <header>
        <a href="index.php"><h1>Diário de Bordo</h1></a>
    </header>


<main>
    <section>
        <form action="insertnavegador.php" class="formnovo">
            <fieldset>
                <legend class="embacadinho"><h2>Adicionar um novo navegador</h2></legend><br>

                    <div style="display:flex;">

                        <div class="inf1" style="margin:auto;">

                            <label for="nome">Nome <br>
                                <input type="text" name="nome" id="nome" size="50px" placeholder="Odysseu">
                            </label><br>

                            <label for="sobrenome">Sobrenome <br>
                                <input type="text" name="sobrenome" id="sobrenome" size="50px" placeholder="Lima">
                            </label><br>

                            <label for="titulo">Título <br>
                                <input type="text" name="titulo" id="titulo" size="50px" placeholder="Rei">
                            </label><br>

                            <label for="origem">Origem <br>
                                <input type="text" name="origem" id="origem" size="50px" placeholder="De Ítaca">
                            </label><br>
                        </div>
                            
                        <div class="inf1" style="margin:auto;">

                            <label for="nascimento">Data de nascimento<br>
                                <input type="date" name="nascimento" id="nascimento">
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
                                    echo "\t<option value=\"{$registro['id_navio']}\">{$registro['nome']}, número {$registro['id_navio']}</option>\n";
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
                                    echo "\t<option value=\"{$registro['id_cargo']}\">{$registro['nome']}</option>\n";
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

                <div>
                    <button type="submit">Enviar</button>
                </div>    
            </fieldset>
        </form>
    </section>
</main>
</body>
</html>