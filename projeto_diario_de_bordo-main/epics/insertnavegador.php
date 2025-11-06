<?php
// funcao require_once carrega codigo de outros arquivos e executa
require_once("./config.php"); // declare $obj da conexao de nome $mysqli

// como o parametro chega por requisicao get, usamos $_GET 
// para recuperar os valores

// recuperamos o valor da PK caso seja informacao no formulario
// $_GET é um vetor associativo no qual as chaves dos valores são estabelecidos 
// a partir dos atributos name dos inputs do formulario 
// $_GET['id_meio_transporte'] vai receber o valor do input name="id_meio_transporte"
// $_GET['nome'] vai receber a informacao do input name="nome"
// transferimos para variaveis comuns para ficar a disposição no restante do programa/script

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$titulo = $_GET['titulo'];
$origem = $_GET['origem'];


$nascimento = $_GET['nascimento'];
$navio = $_GET['navio'];
$cargo = $_GET['cargo'];
$maestria = $_GET['maestria'];


// sql com insert - instrucao parametrizada
$sql = "insert into aluno (nome, sobrenome, titulo, origem, nascimento, navio, cargo, maestria) values (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

// vincula valores nas variaveis as marcacoes ??
$stmt->bind_param("sssssiii", $nome, $sobrenome, $titulo, $origem, $nascimento, $navio, $cargo, $maestria);

// executa instrucao preparada/parametrizada e vinculada com parametros
$html = "";
if ($stmt->execute() === TRUE) {
  // no caso de uso de AUTO_INCREMENT sera preciso usar funcao que recupera que é a nova chave gerada
  //$nova_chave = $stmt->insert_id;
  $html = "Registro inserido com sucesso!";
  // houve sucesso na criacao do registro, vai fazer o insert do campo da relacao N:N
  // se a chave usa auto increment é preciso saber qual a PK atribuida
  // prepara
  $stmt = $mysqli->prepare("insert into aluno_grupo (id_aluno, id_grupo) values (?, ?)");
  foreach($grupos as $grupo) {
      // liga parametros e executa
      $stmt->bind_param("ii", $id, $grupo);
      $stmt->execute();
  }
} else {
  $html = "Erro ao inserir registro: " . $mysqli->error;
}

$html = $html . "<br>\n<br>\n<a href=\"listar_aluno.php\">Voltar para lista</a>\n";

// variavel $modelo tem o html base e precisamos substituir os pontos marcados
// define a operacao/funcao do programa
$modelo = str_replace("<!--operacao-->", "Cadastrar Aluno", $modelo);
// define o conteudo central da pagina
$modelo = str_replace("<!--conteudo_interno-->", $html, $modelo);
// 'imprime' todo html para o navegador
echo $modelo;

?>
