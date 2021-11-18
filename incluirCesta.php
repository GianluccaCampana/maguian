<?php
if($_GET["codigo"]){
	$produto	=	$_GET["codigo"];
	session_start();
	$id 	=	session_id();
	$sql	=	"insert into cesta(sessionId, codigoProduto, qtd, valorUnit, valorTot) values('$id', '$produto', '$qtd', '$valorUnit', '$valorTot')";
	$conexao = new mysqli("localhost","root","","pwt");
	mysqli_query($conexao, $sql);
	mysqli_close($conexao);
}
header("location: cesta.php");
?>