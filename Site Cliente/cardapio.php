<?php
  session_start();
  include("php/conecta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/png" href="images/icons/logo.png"/> -->

    <title>Cardápio Sabor & Amor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/msg.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="mainNavLogo navbar-brand js-scroll-trigger" href="#page-top" id="mainNavLogo"><img src="img/logo-min.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#destaques" class="nav-link js-scroll-trigger">Sugestões</a>
            </li>
            <li class="nav-item">
              <a href="#comidas" class="nav-link js-scroll-trigger">Comidas</a>
            </li>
            <li class="nav-item">
              <a href="#bebidas" class="nav-link js-scroll-trigger">Bebidas</a>
            </li>
            <li class="nav-item">
              <?php
                if (!isset($_SESSION['id'])) {
                  echo '<a href="Login_v2/login.php" class="nav-link js-scroll-trigger">Login</a>';
                } else {
                  $id = $_SESSION['id'];
                  $sql = "SELECT nome FROM tb_cliente WHERE id='$id'";
                  $result = mysqli_query($conecta,$sql);
                  $consulta = mysqli_fetch_assoc($result);
                  echo '<div class="btn-group">
                          <a class="nav-link" data-toggle="dropdown">'.$consulta['nome'].'</a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item logout" href="php/logout-cardapio.php" type="button">Logout</a>
                          </div>
                        </div>';
                }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Intro Cardápio -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div id="texto">
                <h1 class="brand-heading"><a href="index.php" title="Voltar à página inicial"><img src="img/logo.png"></a></h1>              
                <h3 class="intro-text">Cardápio</h3>
                <a href="#destaques" class="btn btn-circle js-scroll-trigger ">
                  <i class="fa fa-angle-double-down animated"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="imagem"></div>
      <div id="teste"></div>
    </header>
    <section class="bg-white" id="destaques">
      <div class="container">
        <div class="cardapio">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Sugestões</h2>
              <table align="center" border="0" cellspacing="0" cellpadding="4">
                <?php
                  $sql = "SELECT * FROM tb_produto WHERE id='1' OR id='2' OR id='3'";
                  $result = mysqli_query($conecta,$sql);

                  while ($consulta = mysqli_fetch_assoc($result)) {
                    echo "<td><img src='data:image/jpeg;base64,".base64_encode($consulta['img'])."'><br>";
                    echo "<br><p class='nome'>$consulta[nome]</p>";
                    echo "<p class='unidade'>$consulta[unidade]</p>";
                    echo "<p class='valor'>".number_format($consulta['valor'], 2, ',', '.')."<p>";
                    echo "<form action='php/carrinho.php'>";
                    echo "<input type='hidden' name='acao' value='add'>";
                    echo "<input type='hidden' name='id' value='$consulta[id]'>";
                    echo "<input type='number' name='qtde' class='qtde' min='0' max='10' value='1'><br>";
                    if (!isset($_SESSION['id'])) {
                      echo "<a href='Login_v2/login.php' class='add'>Adicionar ao carrinho</a>";
                    } else {
                      echo "<button class='add'>Adicionar ao carrinho</button>";
                    }
                    echo "</form>";
                    echo "</td>";
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>     
    </section>
    <hr>
    <section class="bg-white" id="comidas">
      <div class="container">
        <div class="cardapio">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Comidas</h2>
              <table align="center" border="0" cellspacing="0" cellpadding="4">
                <?php
                  $sql = "SELECT * FROM tb_produto WHERE tipo='comida'";
                  $result = mysqli_query($conecta,$sql);

                  while ($consulta = mysqli_fetch_assoc($result)) {
                    echo "<td><img src='data:image/jpeg;base64,".base64_encode($consulta['img'])."'><br>";
                    echo "<br><p class='nome'>$consulta[nome]</p>";
                    echo "<p class='unidade'>$consulta[unidade]</p>";
                    echo "<p class='valor'>".number_format($consulta['valor'], 2, ',', '.')."<p>";
                    echo "<form action='php/carrinho.php'>";
                    echo "<input type='hidden' name='acao' value='add'>";
                    echo "<input type='hidden' name='id' value='$consulta[id]'>";
                    echo "<input type='number' name='qtde' class='qtde' min='0' max='10' value='1'><br>";
                    if (!isset($_SESSION['id'])) {
                      echo "<a href='Login_v2/login.php' class='add'>Adicionar ao carrinho</a>";
                    } else {
                      echo "<button class='add'>Adicionar ao carrinho</button>";
                    }
                    echo "</form>";
                    echo "</td>";
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>     
    </section>
    <hr>
    <section class="bg-white" id="bebidas">
      <div class="container">
        <div class="cardapio">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Bebidas</h2>
              <table align="center" border="0" cellspacing="0" cellpadding="4">
                <?php
                  $sql = "SELECT * FROM tb_produto WHERE tipo='bebida'";
                  $result = mysqli_query($conecta,$sql);

                  while ($consulta = mysqli_fetch_assoc($result)) {
                    echo "<td><img src='data:image/jpeg;base64,".base64_encode($consulta['img'])."'><br>";
                    echo "<br><p class='nome'>$consulta[nome]</p>";
                    echo "<p class='unidade'>$consulta[unidade]</p>";
                    echo "<p class='valor'>".number_format($consulta['valor'], 2, ',', '.')."<p>";
                    echo "<form action='php/carrinho.php'>";
                    echo "<input type='hidden' name='acao' value='add'>";
                    echo "<input type='hidden' name='id' value='$consulta[id]'>";
                    echo "<input type='number' name='qtde' class='qtde' min='0' max='10' value='1'><br>";
                    if (!isset($_SESSION['id'])) {
                      echo "<a href='Login_v2/login.php' class='add'>Adicionar ao carrinho</a>";
                    } else {
                      echo "<button class='add'>Adicionar ao carrinho</button>";
                    }
                    echo "</form>";
                    echo "</td>";
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>     
    </section>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>

    <footer id="cd">
      <div class="container text-center">
        <p class="title">Copyright &copy; Sabor & Amor 2018</p>
      </div>
    </footer>
  </body>

</html>