<?php
// funcao require_once carrega codigo de outros arquivos e executa
require_once("../config.php"); // declare $obj da conexao de nome $mysqli

// como o parametro chega por requisicao get, usamos $_GET 
// para recuperar os valores

// recuperamos o valor da PK caso seja informacao no formulario
// $_GET é um vetor associativo no qual as chaves dos valores são estabelecidos 
// a partir dos atributos name dos inputs do formulario 
// $_GET['id_meio_transporte'] vai receber o valor do input name="id_meio_transporte"
// $_GET['nome'] vai receber a informacao do input name="nome"
// transferimos para variaveis comuns para ficar a disposição no restante do programa/script

$nome = $_GET['nome_equipamento'];
$tipo = $_GET['tipo_equipamento'];
$descricao = $_GET['desc_equipamento'];
$id = $_GET['id'];
//$maestria = $_GET['maestria'];


// sql com insert - instrucao parametrizada
$sql = "update equipamento set nome=?, tipo=?, descricao=? where id_equipamento = ?";
$stmt = $mysqli->prepare($sql);

// vincula valores nas variaveis as marcacoes ??
$stmt->bind_param("sssi", $nome, $tipo, $descricao, $id);


if ($stmt->execute() === TRUE) {
  // no caso de uso de AUTO_INCREMENT sera preciso usar funcao que recupera que é a nova chave gerada
  //$nova_chave = $stmt->insert_id;
  echo "Equipamento atualizado com sucesso!";
  // houve sucesso na criacao do registro, vai fazer o insert do campo da relacao N:N
  // se a chave usa auto increment é preciso saber qual a PK atribuida
  // prepara

  /* INSERIR TABLEA N PRA N
  $stmt = $mysqli->prepare("insert into aluno_grupo (id_aluno, id_grupo) values (?, ?)");
  foreach($grupos as $grupo) {
      // liga parametros e executa
      $stmt->bind_param("ii", $id, $grupo);
      $stmt->execute();
  }*/

} else {
  echo "Erro ao atualizar o equipamento: " . $mysqli->error;
}

echo "<br>\n<br>\n<a href=\"../mostrar/mostrarequipamento.php\">Ver outros equipamentos</a>\n";

echo "<br>\n<br>\n<a href=\"../index.html\">Página inicial</a>\n";

?>