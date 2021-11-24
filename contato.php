<!doctype html>
<html>
<body>
	<h1>Contato</h1>
	<form method="post" action="contato.php">
	De: <input required type="email" name="de" id="de" /><br/>
	nome:<input type="text" id="nome" name="nome" required /><br/>
	Assunto:<input type="text" id="assunto" name="assunto" required /><br/>
	Mensagem:<textarea required id="msg" name="msg">
	</textarea><br/>
	<button name="bt1">Enviar</button>
	</form>
	<?php if(isset($_POST["bt1"])) enviarEmail(); ?>
</body>
</html>	
<?php
function enviarEmail(){
	$nome	=	$_POST["nome"];
	$de		=	$_POST["de"];
	$assunto=	$_POST["assunto"];
	$msg	=	$_POST["msg"];

	$para = "to:norton.glaser@fatec.sp.gov.br";
	$mensagem = "<b>nome:</b>$nome<br/><b>email:</b>$de<br/><b>Mensagem:</b>$msg";
	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=UTF-8\r\n";
	$header .= "from: Fatec Teste<fatecpwAds2021@outlook.com>";
	$header .= "Cc:$de\r\n";

$success = mail($para, $assunto, $mensagem, $header);
if($success){	
	echo "<h3>Email enviado com sucesso</h3>";
} else {
	echo "<h3>ocorreu um erro !</h3>";	
}	

}
?>