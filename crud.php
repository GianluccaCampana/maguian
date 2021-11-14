<!doctype html>
<html>
<body>
    <h1>Cadastro Produto</h1>
    <form method="post" action="crud.php">
    nome:<input type="text" id="nome" name="nome" /><br/>
    email:<input type="text" id="email" name="email" /><br/>	
    senha:<input type="text" id="senha" name="senha" /><br/>	
    cpf:<input type="number" id="cpf" name="cpf" /><br/>
    telefone:<input type="number" id="telefone" name="telefone" /><br/>
	
    <button name="bt1">Inserir</button>
    <button name="bt2">Pesquisar</button>
    <button name="bt3">Alterar</button>
    <button name="bt4">Remover</button>	
    </form>
    <?php
    if(isset($_POST["bt1"])) inserir();
    if(isset($_POST["bt2"])) pesquisar();
    if(isset($_POST["bt3"])) alterar();	
    if(isset($_POST["bt4"])) remover();
    ?>
</body>    
</html>
<?php
function inserir(){
    $codigo = $_POST["ID"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $con = new mysqli("localhost", "root", "", "pwt");
    $sql = "insert into usuario(nome, email, senha, cpf, telefone) values('$nome', '$email', '$senha', '$cpf', '$telefone')";
    if(mysqli_query($con, $sql)){
    echo "<h3>Registro inserido com sucesso !</h3>";
    } else {
    echo "<h4>Ocorreu um erro</h4>";
    }
    mysqli_close($con);
    }


function pesquisar() {
    $codigo     =      $_POST["codigo"];
    $con        =      new mysqli("localhost", "root", "", "pwt");
    $sql        =      "select * from produto where codigo='$codigo'";
    $retorno    =      mysqli_query($con, $sql);

    if($reg = mysqli_fetch_array($retorno)){
        $titulo     =   $reg["titulo"];
        $descritivo =   $reg["descritivo"];
        $valor      =   $reg["valor"];
        $quantidade =   $reg["quantidade"];
        $categoria  =   $reg["categoria"];
        echo "<script lang='javascript'>";
        echo "titulo.value='$titulo';";
        echo "descritivo.value='$descritivo';";
        echo "valor.value='$valor';";
        echo "quantidade.value='$quantidade';";
        echo "categoria.value='$categoria';";
        echo "codigo.value='$codigo';";
        echo "</script>";
    } else {
        echo "<h4>Produto não encontrado</h4>";
    }
    mysqli_close($con);
}

function alterar(){
    $codigo     =   $_POST["codigo"];
    $titulo     =   $_POST["titulo"];
    $descritivo =   $_POST["descritivo"];
    $valor      =   $_POST["valor"];
    $quantidade =   $_POST["quantidade"];
    $categoria  =   $_POST["categoria"];
    $con        =   new mysqli("localhost", "root", "", "pw");
    $sql        =   "update produto set titulo='$titulo', descritivo='$descritivo', valor='$valor', quantidade='$quantidade', categoria='$categoria' where codigo='$codigo'";
    if(mysqli_query($con, $sql)){
        echo "<h3>Produto alterado com sucesso!</h3>";
    } else {
        echo "<h4>Ocorreu um erro na alteração do Produto</h4>";
    }
    mysqli_close($con);
}

function remover(){
    $codigo     =   $_POST["codigo"];
    $con        =   new mysqli("localhost", "root", "", "pw");
    $sql        =   "delete from produto where codigo='$codigo'";
    if(mysqli_query($con, $sql)){
        echo "<h3>Produto removido com sucesso!</h3>";
    } else {
        echo "<h4>Ocorreu um erro na remoção do Produto</h4>";
    }
    mysqli_close($con);
}
?>