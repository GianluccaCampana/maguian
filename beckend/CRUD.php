<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $btCadastro =  $_POST['btCadastro'];

    if(isset($btCadastro)){
        $con = new mysqli("localhost", "root", "", "maguian" );
        $sql = "insert into pessoa (nome, email, senha, cpf, telefone) values ('$nome','$email', md5('$senha'),'$cpf', '$telefone')";
        
        if(mysqli_query($con, $sql)){
            header("location: ..\cadastro.html");
        }else{
            echo "<h1>Cadastro não realizado<h2>";
        }
    }

?>