<?php
require_once("../config.php");

if (isset($_POST['enviar'])) {
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $estado = $_POST['estado'];

  $sql = "INSERT INTO categorias (nome, descricao, estado)
  VALUES ('{$nome}','{$descricao}','{$estado}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-categorias.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}

}

?>
