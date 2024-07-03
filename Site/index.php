<?php
  include("php/msg.php");
?>

<!DOCTYPE html>
<meta charset="utf-8">

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fran Sistemas - Desenvolvimento de Sites</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/msg.css">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

</head>

<body id="page-top" onload="start()">
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo-small.png" class="logo-min"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfólio</a>
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
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text" id="texto">
        <div class="intro-lead-in">Bem-vindo ao nosso site!</div>
        <div class="intro-heading text-uppercase col-xd-12"><img src="img/logo-large.png" class="logo-max"></div>
        <!-- <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div><br><br> -->
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saiba mais</a>
      </div>
    </div>
    <div id="imagem"></div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Serviços</h2>
          <h3 class="section-subheading text-muted">Alguns dos serviços prestados por nós:</h3>
        </div>
      </div>
      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/about/resp.png" class="slide">
          <div class="text">Nossos sites são completamente responsivos, podendo ser visualizados tanto em computadores quanto em dispositivos móveis.</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/about/sys.png" class="slide">
          <div class="text">Também trabalhamos com o desenvolvimento de sistemas, tanto para sites quanto para outras plataformas.</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/about/logo.png" class="slide">
          <div class="text">Outro serviço prestado por nós é a criação de logos personalizados para sua empresa entre outros.</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      <!-- <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li class="col-xd-6">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/resp.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Sites Responsivos</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Nossos sites são completamente responsivos, podendo ser visualizados tanto em computadores quanto em dispositivos móveis.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted col-xd-6">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/sys.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Sistemas</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Também trabalhamos com o desenvolvimento de sistemas, tanto para sites quanto para outras plataformas.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/logo.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Logos</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Outro serviço prestado por nós é a criação de logos personalizadas para sua empresa entre outros.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <a href="#portfolio"><div class="timeline-image">
                <h4>Seja parte
                  <br>da nossa
                  <br>História!</h4>
                </div></a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </section>
    
    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfólio</h2>
            <h3 class="section-subheading text-muted">Alguns trabalhos que já realizamos.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/fransys.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Site Fran Sistemas</h4>
              <p class="text-muted">Nosso site</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/saboramor.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Site Sabor & Amor</h4>
              <p class="text-muted">Site do cliente Sabor & Amor</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sobre</h2>
            <h3 class="section-subheading text-muted">Somos uma empresa voltada para o ramo de criação de websites e sistemas diversos, que busca oferecer o melhor atendimento para nossos clientes. Nossos profissionais foram treinados e selecionados para garantir a melhor experiência para nossos clientes.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Missão</h4>
            <p class="text-muted">Criar websites dinâmicos, modernos e agradáveis utilizando tecnologias que garantem o melhor resultado possível para nossos clientes.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Visão</h4>
            <p class="text-muted">Ser reconhecida como uma das melhores empresas de criação de websites e sistemas.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-star fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Valores</h4>
            <div class="text-muted">
              <li>Qualidade na criação de sites</li>
              <li>Segurança nos sistemas</li>
              <li>Comprometimento para com nossos clientes</li>
              <li>Trabalhamos com sistemas diversos</li>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nossa Equipe</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/eli.png" alt="">
              <h4>Eliaquim Santos</h4>
              <p class="text-muted">Programador e Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/EliasQuinzel" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/EliasQueenSantos" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/eliaquimsl/" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/chico.png" alt="">
              <h4>Francisco Igor</h4>
              <p class="text-muted">Programador e Supervisor</p>
              <ul class="list-inline social-buttons">
                <!-- <li class="list-inline-item">
                  <a href="#" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li> -->
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/francisco.soares.14224094" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/francisco_fins/" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/gio.png" alt="">
              <h4>Giovanni Jamberso</h4>
              <p class="text-muted">Supervisor e Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/Gigio_play" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/giovanni.jambersogoncalves" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/giovanni_jamberso/" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/luan.png" alt="">
              <h4>Luan Mateus</h4>
              <p class="text-muted">Programador</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/LuanParaibuna" target="_blank">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/luan.mateus.399" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/luanmateuschagas/" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <!-- <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fale Conosco</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?php
              echo showMessage();
            ?>
            <form id="contactForm" name="sentMessage" method="post" action="php/insert-msg.php" accept-charset="utf-8">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="nome" name="nome" type="text" placeholder="Seu nome*" required data-validation-required-message="Por favor, digite seu nome." maxlength="150">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Seu email*" required data-validation-required-message="Por favor, digite seu email." maxlength="150">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="telefone" name="telefone" type="tel" placeholder="Seu número de telefone" pattern=".{14,}" title="O número de telefone deve ter no mínimo 8 números além dos 2 números do DDD." maxlength="15" onkeypress="mascara(this,mtel)">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Sua mensagem*" required data-validation-required-message="Por favor, digite uma mensagem." maxlength="150"></textarea>
                    <span class="help-block text-muted caracteres">150</span><br>
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

    <!-- Mapa -->
    <section id="maps">
      <div>
        <div class="row">
          <div class="container col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Localização</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.496812702877!2d-45.886432585490105!3d-23.225001655140726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4aeb585db9df%3A0xefbc845661ef1ac0!2sR.+Barra+Velha%2C+174+-+Jardim+Sat%C3%A9lite%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP%2C+12230-110!5e0!3m2!1spt-BR!2sbr!4v1525293995543"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Fran Sistemas 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="login/login.php">Área Administrativa</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Site Fran Sistemas</h2>
                  <p class="item-intro text-muted"></p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/fransys.jpg" alt="">
                  <ul class="list-inline">
                    <li>Data: Fevereiro de 2018</li>
                    <li>Categoria: Criação e Desenvolvimento de Sites e Sistemas</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                  Fechar Página</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Site Sabor & Amor</h2>
                  <p class="item-intro text-muted"></p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/saboramor.jpg" alt="">
                  <ul class="list-inline">
                    <li>Data: Abril de 2018</li>
                    <li>Cliente: Sabor & Amor</li>
                    <li>Categoria: Café e Bolinho de Chuva</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                  Fechar Página</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div id="overlay">
      <div class="loader"></div>
    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/maskcel.js"></script>
    <script src="js/txt.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/hash.js"></script>
    <!-- <script src="js/teste.js"></script> -->

</body>

</html>