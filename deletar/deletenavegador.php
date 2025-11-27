<?php
// funcao require_once carrega codigo de outros arquivos e executa
require_once("../config.php");


// sql com insert - instrucao parametrizada
$id = $_GET['id'];
$sql = "DELETE FROM navegador WHERE `navegador`.`id_navegador` = ?";
$stmt = $mysqli->prepare($sql);

// vincula valores nas variaveis as marcacoes ??
$stmt->bind_param("i", $id);


if ($stmt->execute() === TRUE) {
  // no caso de uso de AUTO_INCREMENT sera preciso usar funcao que recupera que é a nova chave gerada
  //$nova_chave = $stmt->insert_id;
  echo "Navegador expurgado da existência com sucesso!";
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
  echo "Erro ao deletar navegador: " . $mysqli->error;
}

echo "<br>\n<br>\n<a href=\"../index.html\">Página inicial</a>\n";

echo "<br>\n<br>\n<a href=\"../mostrar/mostrarnavegador.php\">Ver tripulação</a>\n";

?>