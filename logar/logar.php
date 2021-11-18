<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$con = new mysqli ("localhost","root", "","pwt");
$sql = "select ID, email, senha from usuario where email='$email'
        and senha=md5('$senha') ";

$retorno = mysqli_query($con, $sql);

if($reg = mysqli_fetch_array($retorno)){
    session_start();
    $_SESSION['email'] = $reg['email'];
    $_SESSION['nome'] = $reg['nome'];
    $_SESSION['id'] = $reg['ID'];
    header("location: ../pagina-inicial.php");
}else{
    header("location: ../login.php");
}
mysqli_close($con);

?>