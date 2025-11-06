<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "styleinput.css"?></style>
    <style><?php include "styleestrutura.css"?></style>
    <style><?php include "classesids.css"?></style>
    
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


<main>
    <section>
        <form action="" class="formnovo">
            <fieldset>
                <legend class="embacadinho"><h2>Adicionar um novo navegador</h2></legend><br>

                    <div style="display:flex;">

                         <div class="inf1" style="margin:auto;">

                            <label for="nome">Nome <br><input type="text" id="nome" size="50px" placeholder="Odysseu"></label><br>

                            <label for="nome">Sobrenome <br><input type="text" id="sobrenome" size="50px" placeholder="Lima"></label><br>

                            <label for="nome">Título <br><input type="text" id="nome" size="50px" placeholder="Rei"></label><br>

                            <label for="nome">Origem <br><input type="text" id="nome" size="50px" placeholder="De Ítaca"></label><br>
                        </div>
                            
                        <div class="inf1" style="margin:auto;">
                            <label for="nascimento">Data de nascimento<br><input type="date"></label><br>

                            <label for="navio">De qual navio faz parte? <br>
                                <select name="navio" id="navio">
                                    <option value="1" selected>Número 1</option>
                                    <option value="2">Número 2</option>
                                    <option value="3">Número 3</option>
                                </select>                               
                            </label><br>

                            <label for="cargo">Cargo <br>
                                <select name="cargo" id="cargo">
                                    <option value="capitao">Capitão</option>
                                </select>
                            </label><br>

                            <label for="maestria">Adicionar maestria <br>
                                <select name="cargo" id="cargo">
                                    <option value="capitao">nome da arma</option>
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

    <section>
        <p>
            lista com os navegadorres atuais
        </p>
    </section>
</main>
</body>
</html>