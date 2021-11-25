<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="cssprojeto.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!--validação-->
  <script language="JavaScript" src="javascript/cadastroValidacao.js"></script>

  <!--Jquery-->
  <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

</head>

<header>
  <table>

      <tr> <!--CABEÇALHO-->
        <div class="p-5 mb-2 bg-dark text-white" >
          <font size=100px id="cabeca" >MAGUIAN</font>
          
          <!--PESSOINHA-->
          <a id="pessoinha" href="./login.php"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person" viewBox="0 0 30 30" >
            <path  d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg></a>
          
        
          <!--CARRINHO-->
          <a  id="carrinho" href="cesta.php"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person" viewBox="0 0 30 30"  >
            <path   d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
          </svg></a>
          
          <!--LOGO-->
          <a id="logo" href="pagina-inicial.php"> <img src="./imagens/logo.png" alt="Logo"> </a>


          </div>

      </tr>
      
      <tr><!--NAV BAR-->
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
          <div class="container-fluid">
            <a class="navbar-brand" href="pagina-inicial.php">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./times-internacionais.php">Internacionais</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./times-nacionais.php">Nacionais</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./selecoes.php">Seleções</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Outros
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Acessórios </a></li>
                    <li><a class="dropdown-item" href="#">Colecionáveis</a></li>
                    <li><a class="dropdown-item" href="#">Faixa</a></li>
                  </ul>
                </li>
              </ul>
              <form method="post" action="vitrine.php" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" name="busca" id="busca" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit" name="bt1">Buscar</button>
              </form>
            </div>
          </div>
        </nav>

      </tr>

      </table>
</header>


<body>
  <!--efetuar login-->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="content">
          <div class="main p-3 pt-4">
            <div class="container">
              <div class="col-xs-12 col-lg-10 col-xl-8">
                <div class="card row">
                  <div class="card-header">
                    <h4 class="mr-auto mb-0 pr-3">Já tenho cadastro</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="login.php">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label class="col-form-label" for="Name">Email</label>
                          <input type="text" class="form-control" type="text" id="email" name="email">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label class="col-form-label" for="Password">Senha</label>
                          <input type="password" class="form-control" type="text" id="senha" name="senha">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-secondary" onclick="validacao()" id="ButtonLogin" style="margin-top: 5px;" name="bt1">Entrar</button>
                      <p><a href="./esqueci.html" target="new">Esqueci minha Senha</a></p>
                    </form>
                    <?php if (isset($_POST["bt1"])) logar(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--fazer novo cadastro-->
      <div class="col-sm">
        <div class="row">
          <div class="col-sm">
            <div class="content">
              <div class="main p-3 pt-4">
                <div class="container">
                  <div class="col-xs-12 col-lg-10 col-xl-8">
                    <div class="card row">
                      <div class="card-header">
                        <h4 class="mr-auto mb-0 pr-3">Ainda não tenho cadastro</h4>
                      </div>
                      <div class="card-body">
                        <form class="col text-center">
                          <div class="col text-center">
                            <a href="./cadastro.php" class="btn btn-secondary " tabindex="-1" role="button" aria-disabled="true">Cadastrar</a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<footer class="section footer-classic context-dark bg-image" style="background-color: #292b2c;">
  <div class="container" style="margin-top: 30%;">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <div class="pr-xl-4" style="margin-top: 9%;"><a class="brand" href="index.html"> </a>
          <p>Somos o MAGUIAN (Matheus, Guilherme e Gianlucca) e este é o nosso e-commerce, desenvolvido para fins educativos </p>

          <p class="rights"><span>©  </span><span class="copyright-year">2021</span><span> </span><span>Maguian</span><span>. </span><span>Todos direitos reservados.</span></p>
        </div>
      </div>
      <div class="col-md-4" style="margin-top: 3%;">
        <h5>Contatos</h5>
        <dl class="contact-list">
          <dt>Endereço:</dt>
          <dd>R. Frei João, 59 - Ipiranga, São Paulo</dd>
        </dl>
        <dl class="contact-list">
          <dt>email:</dt>
          <dd><a href="mailto:#">guilherme.v.sousa@hotmail.com</a></dd>
        </dl>
        <dl class="contact-list">
          <dt>Telefone</dt>
          <dd><a href="tel:#">(11)99883-8507</a> <span>ou</span> <a href="tel:#">(11) 0800 0171</a>
          </dd>
        </dl>
      </div>
      <div class="col-md-4 col-xl-3" style="position: absolute; margin-top: 2%; left: 70%;">
        <h5>Links</h5>
        <ul class="nav-list">
          <li><a href="" target="_blank">Sobre</a></li>
          <li><a href="#" target="_blank">Projetos</a></li>
          <li><a href="#" target="_blank">Contatos</a></li>
          <li><a href="#" target="_blank">Preços</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row no-gutters social-container">
    <div class="col"><a class="social-inner" href="https://www.facebook.com/matheus.barnabe.1" target="_blank"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
    <div class="col"><a class="social-inner" href="https://www.instagram.com/10_vieira/" target="_blank"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
    <div class="col"><a class="social-inner" href="https://twitter.com/Guilherme10vs" target="_blank"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
    <div class="col"><a class="social-inner" href="https://www.google.com.br" target="_blank"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
  </div>
</footer>

</html>

<?php




function logar() 
{
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  $con = new mysqli("localhost", "root", "", "pwt");
  $sql = "select ID, email, senha, nome from usuario where email='$email'
        and senha=md5('$senha') ";

  $retorno = mysqli_query($con, $sql);

  if ($reg = mysqli_fetch_array($retorno)) {
    $_SESSION['email'] = $reg['email'];
    $_SESSION['nome'] = $reg['nome'];
    $_SESSION['id'] = $reg['ID'];
    $_SESSION['admin'] = $reg['admin'];

    //header("location: pagina-inicial.php");
    echo "<script lang='javascript'> alert('Login com sucesso'); window.location.href='pagina-inicial.php';</script>";
    echo "<h3>Login com sucesso</h3>";
  } else {
    echo "<h3>Usuário ou senha inválidos</h3>";
  }
  mysqli_close($con);
}

?>

