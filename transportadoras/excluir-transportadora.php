<?php
require_once("../config.php");
$id = (int) $_GET['id'];
$sql = "DELETE FROM transportadoras WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-transportadoras.php?sucesso=Excluído+com+Sucesso!");
  die();
} else {
	echo("Descrição do Erro: " . mysqli_error($conexao));
	die();
}
