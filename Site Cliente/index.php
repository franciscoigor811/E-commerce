<?php
  session_start();

  if (!isset($_SESSION['msg'])) {
    $_SESSION['msg'] = "DEFAULT";
  }
  if ($_SESSION['msg']=="success"){
    $texto = ("<div class='success'><b>Sucesso!</b> Sua mensagem foi enviada com sucesso.</div>");
  }
  elseif ($_SESSION['msg']=="error") {
    $texto = ("<div class='error'><b>Erro!</b> Ocorreu um erro ao tentar enviar a mensagem.</div>");
  }
  else{
    $texto = NULL;
  }

  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sabor & Amor</title>

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
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kid">Kids</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#maps">Localização</a>
            </li>
            <li class="nav-item">
              <a href="cardapio.php" class="nav-link js-scroll-trigger">Cardápio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div id="texto">
                <h1 class="brand-heading"><img src="img/logo.png"></h1>
                <p class="intro-text">Venha provar o melhor bolinho de chuva do Vale do Paraíba</p>
                <a href="#services" class="btn btn-circle js-scroll-trigger ">
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

    <!-- Services Section -->
    <section id="services" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="title">Serviços</h2>
            <p class="title">Nosso serviço é realizado localmente com ótimos atendentes, nossa especialidade são bolinhos de chuva de otima qualidade</p>
            <img src="img/bolo.jpg">
          </div>
        </div>
      </div>
    </section>
     

    <section id="kid" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="title">Espaço Kids</h2>
            <p class="title">Temos um espaço para os seus filhos brincarem e se divertirem com briquedos para todas as idades e supervisores capacitados, enquanto você pode degustar os nossos produtos.</p>
            <img src="img/c.jpg">
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="content-section text-center bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sobre</h2>
            <p class="section-subheading">Nossa empresa é um espaço especializado em bolinhos de chuva e também um café com ambiente diferenciado. Temos por objetivo satisfazer o cliente também se remetendo ao maternal.</p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Missão</h4>
            <p>Satisfazer o cliente apaixonado por bolinho de chuva. Através de um espaço aconchegante para momentos entre família e amigos.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Visão</h4>
            <p>Ser referência de excelência em produtos e atendimento no ramo alimentício, crescendo e criando filiais.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-star fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Valores</h4>
            <div>
              <li>Qualidade</li>
              <li>Cliente satisfeito</li>
              <li>Ética e respeito</li>
              <li>Compromisso ambiental e cultural</li>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="team-member">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nossa Equipe</h2>
            <h3 class="section-subheading text-muted"></h3>
            <a href="#equipe" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/carol.jpg" alt="">
              <h4>Carolina do Prado</h4>
              <p class="text-muted">CEO e Fundador</p>
              <ul class="list-inline social-buttons" >
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter alinha" ></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook alinha" ></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin alinha" ></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/leandro.jpg" alt="">
              <h4>Leandro Serpa</h4>
              <p class="text-muted">CEO e Fundador</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter alinha" ></i>
                  </a>
                </li>
                <li class="list-inline-item" >
                  <a href="#">
                    <i class="fa fa-facebook alinha" ></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin alinha" ></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
         
    </section>

    <!-- Contact Section -->
     <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fale Conosco</h2>
            <p class="section-subheading">Nos envie uma mensagem e responderemos o mais rápido possível.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?php
              echo $texto;
            ?>
            <form id="contactForm" name="sentMessage" method="POST" action="php/msg.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="nome" id="name" type="text" placeholder="Seu nome*" required data-validation-required-message="Por favor digite seu nome.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Seu e-mail*" required data-validation-required-message="Por favor digite seu e-mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="tel" id="phone" type="tel" onkeypress="mascara(this,mtel);" placeholder="Seu número de telefone" pattern=".{14,}" title="O número de telefone deve ter no mínimo 8 números além dos 2 números do DDD." maxlength="15" >
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="msg" id="message" type="text"placeholder="Sua mensagem*" required data-validation-required-message="Por favor digite uma mensagem."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Map Section -->
    <section id="maps">
      <div class="col-lg-12 text-center">
        <br><BR>
        <h2 class="title">Localização</h2>
        <p class="section-subheading"></p>
      </div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.5983550187843!2d-45.91293548502851!3d-23.22130358485284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc3578f34053f7%3A0x68531fb8087baf93!2sR.+Benedito+Osvaldo+Lecques%2C+51+-+Parque+Res.+Aquarius%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP%2C+12246-021!5e0!3m2!1spt-BR!2sbr!4v1528136452187" width="600" height="450" class="col-md-12" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p class="title">Copyright &copy; Sabor & Amor 2018</p>
      </div>
      <div class="container text-center">
        <a href="Login_v1/login.php" class="title">Área administrativa</a>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script src="js/maskcel.js"></script>
    <script src="js/mask.js"></script>
  </body>

</html>
