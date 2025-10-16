<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include "styleinput.css"?></style>
    <style><?php include "styleestrutura.css"?></style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Diário de Bordo</title>
</head>
<body>
    <header>
        <h1>Diário de Bordo</h1>
        <nav>
            <a href="mostrar.php">Ver sua tripulação</a>
            <a href="novo.php">Adicionar novo navegador</a>
            <a href="alterar.php">Editar tripulação</a>
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
                                </div>
                        </div>
                <div style="display: flex; justify-content: space-around;">
                <label for="foto">Foto de perfil <input type="file"></label>
                </div>    
            </div>
            </fieldset>
        </form>
    </section>

    <hr>

    <section>
        <div class="adicionar">
            <fieldset>
            <legend><h2>Adicionar Arma</h2></legend>
            <label for="nomarma">Nome <input type="text" id="nomarma"></label><br>
            <label for="tiparma">Tipo <input type="text" id="tiparma"></label><br>
            <label for="desarma">Descrição</label><br>
            <textarea name="desarma" id="desarma"></textarea>

            <input type="submit" value="Enviar">

            <p>
                lista das armas que ja existem
            </p>
            </fieldset>
        </div>

        <div class="adicionar">
            <fieldset>
            <legend><h2>Adicionar Cargo</h2></legend>

            <label for="nomcargo">Nome <input type="text" id="nomcargo"></label><br>
            <label for="desccargo">Descrição</label><br>
            <textarea name="" id="desccargo"></textarea>

            <input type="submit" value="Enviar">

            <p>
                lista dos cargos que já existem e descrição das funções
            </p>
            </fieldset>
        </div>

        <div class="adicionar">
            <fieldset>
            <legend><h2>Adicionar Navio</h2></legend>

            <label for="arma">Nome <input type="text"></label><br>

            <label for="tiponavio">Tipo </label>
            <select name="tiponavio" id="tiponavio">
                <option value="1" selected>Número 1</option>
                <option value="2">Número 2</option>
                <option value="3">Número 3</option>
                <option value="4">Número 4</option>
            </select>
            <br>

            <input type="submit" value="Enviar">

            <p>
                lista dos navios que ja existem e as funções
            </p>
            </fieldset>
        </div>
    </section>

    <hr>

    <h2 class="embacadinho">Tripulação</h2> <br>
    <section>
            <div class="pessoa">
                <p>foto</p>
                <p>nome, sobrenome, título, de onde veio <br>idade <br></p>
                <p>cargo</p>
            </div>
    </section>
</main>
</body>
</html>