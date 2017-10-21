<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

	require_once("../banco/conexao.php");

if (isset($_POST['enviar'])) {

	$nome = $_POST['nome'];
	$data_validade = $_POST['data_validade'];
	$quantidade = $_POST['quantidade'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$imagem = $_POST['imagem'];
	$marca_id = $_POST['marca_id'];
	$categoria_id = $_POST['categoria_id'];

  $sql = "INSERT INTO produtos (nome, data_validade, data_cadastro, quantidade, valor, imagem, marca_id, categoria_id, descricao)
  				VALUES ('{$nome}', '{$data_validade}', now(), '{$quantidade}', '{$valor}', '{$imagem}', '{$marca_id}', '{$categoria_id}', '{$descricao}');";
	echo $sql;

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-produtos.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}

}

?>
