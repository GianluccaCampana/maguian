<!doctype html>
<html>
	<body>
	<h1>cesta</h1>
	<table border="1">
	<tr><td><b>Codigo</b></td>
	<td><b>Título</b></td>
	<td><b>Qtd</b></td>
	<td><b>Valor</b></td>
	<td></td></tr>
	<?php listarCesta(); ?>
	</table>
</body>
</html>
<?php
function listarCesta(){
	session_start();
	$id 	=	session_id();
	$sql 	= "select p.codigo, p.titulo, c.qtd, p.preço from cesta c, produto p where c.codigoProduto=p.codigo and c.sessionId='$id'  order by p.codigo";

	$conexao 	= 	new mysqli("localhost", "root","","pwt");
	$retorno 	=	mysqli_query($conexao, $sql);
	while($reg 	=	mysqli_fetch_array($retorno)){
		$codigo		=	$reg["codigo"];
		$titulo		=	$reg["titulo"];
		$qtd		=	$reg["qtd"];
		$preço		=	$reg["preço"];

		echo "<tr><Td>$codigo</td>";
		echo "<td>$produto</td>";
		echo "<td>$qtd</td>";
		echo "<td>$preço</td>";
		echo "</tr>";
	}
	mysqli_close($conexao);
}
?>
	
	
	