<?php
include("../php/valida.php");
include("../php/acesso-dash.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Fran Sistemas - Formulário de Administrador </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/vendor.css">
  <!-- Theme initialization -->
  <script>
    var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
    {};
    var themeName = themeSettings.themeName || '';
    if (themeName)
    {
      document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
      document.write('<link rel="stylesheet" id="theme-style" href="css/main-' + themeName + '.css">');
    }
    else
    {
      document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
      document.write('<link rel="stylesheet" id="theme-style" href="css/main-blue.css">');
    }
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <!-- <link rel="stylesheet" id="theme-style" href="css/main-blue.css"> -->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="../login/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../css/msg-dash.css">
  <!--===============================================================================================-->
</head>

<body>
  <div class="main-wrapper">
    <div class="app" id="app">
      <header class="header">
        <div class="header-block header-block-collapse hidden-lg-up">
          <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="header-block header-block-nav">
          <ul class="nav-profile">

            <li class="profile dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="name">
                  <?php
                  echo $nome;
                  ?>
                </span> </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"> <a class="dropdown-item" href="../php/logout.php">
                  <i class="fa fa-power-off icon"></i>
                  Logout
                </a> </div>
              </li>
            </ul>
          </div>
        </header>
        <aside class="sidebar">
          <div class="sidebar-container">
            <div class="sidebar-header">
              <div class="brand">
                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Fran Sistemas </div>
              </div>
              <nav class="menu">
                <ul class="nav metismenu" id="sidebar-menu">
                  <li> <a href="index.php">
                    <i class="fa fa-home"></i> Dashboard
                  </a> </li>
                  <li> <a href="">
                    <i class="fa fa-table"></i> Tabelas
                    <i class="fa arrow"></i>
                  </a>
                  <ul>
                    <?php
                    if ($acesso == 1) {
                      echo "<li> <a href='table-adm.php'>
                      Administradores
                      </a> </li>";
                    } else {
                      NULL;
                    }
                    ?>
                    <li> <a href="table-msg.php">
                      Mensagens
                    </a> </li>
                  </ul>
                </li>
                <?php
                if ($acesso == 1) {
                  echo "<li class='active'> <a href=''>
                  <i class='fa fa-pencil-square-o'></i> Formulários
                  <i class='fa arrow'></i>
                  </a>
                  <ul>
                  <li class='active'> <a href='form-adm.php'>
                  Administradores
                  </a> </li>
                  </ul>
                  </li>";
                } else {
                  NULL;
                }
                ?>
              </li>
            </ul>
          </nav>
        </div>
        <footer class="sidebar-footer">
          <ul class="nav metismenu" id="customize-menu">
            <li>
              <ul>
                <li class="customize">
                  <div class="customize-item">
                    <div class="row customize-header">
                      <div class="col-xs-4"> </div>
                      <div class="col-xs-4"> <label class="title">fixed</label> </div>
                      <div class="col-xs-4"> <label class="title">static</label> </div>
                    </div>
                    <div class="row hidden-md-down">
                      <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                        <span></span>
                      </label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="sidebarPosition" value="">
                        <span></span>
                      </label> </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-4"> <label class="title">Header:</label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                        <span></span>
                      </label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="headerPosition" value="">
                        <span></span>
                      </label> </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                        <span></span>
                      </label> </div>
                      <div class="col-xs-4"> <label>
                        <input class="radio" type="radio" name="footerPosition" value="">
                        <span></span>
                      </label> </div>
                    </div>
                  </div>
                  <div class="customize-item">
                    <ul class="customize-colors">
                      <li> <span class="color-item color-red" data-theme="red"></span> </li>
                      <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                      <li> <span class="color-item color-green active" data-theme=""></span> </li>
                      <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                      <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                      <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                    </ul>
                  </div>
                </li>
              </ul> <a href="">
               <i class="fa fa-cog"></i> Customize
             </a> </li>
           </ul>
         </footer>
       </aside>
       <div class="sidebar-overlay" id="sidebar-overlay"></div>
       <article class="content forms-page">
        <div class="title-block">
          <h3 class="title"> Formulário de Administrador </h3>
          <p class="title-description"> Formulário para cadastrar administradores. </p>
        </div>
        
        <section class="section">
          <?php
          echo $texto;
          ?>
          <div class="row sameheight-container">
            <div class="col-md-12">
              <div class="card card-block sameheight-item">
                <form class="validate-form" method="POST" action="../php/insert-adm.php">

                  <div class="form-group validate-input input-100" data-validate = "Digite seu nome">
                    <label class="control-label">Nome</label>
                    <input class="form-control boxed" type="text" name="nome" required>
                    <span class="focus-input100" id="vernome" data-placeholder="Nome"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite um endereço de e-mail válido (Ex.: email@email.com)">
                    <label class="control-label">E-mail</label>
                    <input class="form-control boxed" type="email" name="email" required>
                    <span class="focus-input100" id="veremail" data-placeholder="E-mail"></span>
                  </div>

                  <div class="form-group wrap-input100 validate-input input-100" data-validate = "Digite uma senha válida">
                    <label class="control-label">Senha</label>
                    <span class="btn-show-pass">
                      <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="form-control boxed" type="password" name="senha" required>
                    <span class="focus-input100" id="versenha" data-placeholder="Senha"></span>
                  </div>

                  <div class="form-group validate-input input-100" id="divCPF" data-validate = "Digite um CPF válido">
                    <label class="control-label">CPF</label>
                    <input class="form-control boxed" type="text" name="CPF" id="CPF" maxlength="14" onblur="cpfCheck(this)" onkeydown="maskIt(this,event,'###.###.###-##')" required>
                    <span class="focus-input100" data-placeholder="CPF" id="cpfResponse"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite um CEP válido">
                    <label class="control-label">CEP</label>
                    <input class="form-control boxed" type="text" name="CEP" id="CEP" maxlength="10" onblur="pesquisacep(this.value)" onkeydown="maskIt(this,event,'##.###-###')" required>
                    <span class="focus-input100" data-placeholder="CEP"></span>
                  </div> 

                  <div class="form-group validate-input input-100" data-validate = "Digite uma rua válida">
                    <label class="control-label">Rua</label>
                    <input class="form-control boxed" type="text" name="rua" id="rua" required>
                    <span class="focus-input100" data-placeholder="Rua"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite um número válido">
                    <label class="control-label">Número</label>
                    <input class="form-control boxed" type="text" name="numero" id="numero" required>
                    <span class="focus-input100" data-placeholder="Número"></span>
                  </div>

                  <div class="form-group validate-input input-100">
                    <label class="control-label">Complemento</label>
                    <input class="form-control boxed" type="text" name="complemento" id="complemento">
                    <span class="focus-input100" data-placeholder="Complemento"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite um bairro válido">
                    <label class="control-label">Bairro</label>
                    <input class="form-control boxed" type="text" name="bairro" id="bairro" required>
                    <span class="focus-input100" data-placeholder="Bairro"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite uma cidade válida">
                    <label class="control-label">Cidade</label>
                    <input class="form-control boxed" type="text" name="cidade" id="cidade" required>
                    <span class="focus-input100" data-placeholder="Cidade"></span>
                  </div>

                  <div class="form-group validate-input input-100" data-validate = "Digite um estado válido">
                    <label class="control-label">Estado</label>
                    <input class="form-control boxed" type="text" name="uf" id="uf" required>
                    <span class="focus-input100" data-placeholder="Estado"></span>
                  </div>

                  <div class="form-group validate-input input-100">
                    <label class="control-label">Nível de acesso</label>
                    <select class="form-control boxed" name="acesso" required>
                      <option disabled selected hidden value=""> -- Nível de Acesso -- </option>
                      <option value='1'> Webmaster </option>
                      <option value='2'> Funcionário </option>
                    </select>
                    <span class="focus-input100" data-placeholder="Acesso"></span>
                  </div>

                  <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                      <div class="login100-form-bgbtn"></div>
                      <button class="btn btn-primary" name="botão" id="botão">Cadastrar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </article>
    </div>
  </div>
  <!-- Reference block for JS -->
  <div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
      <div class="color-primary"></div>
      <div class="color-secondary"></div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>


  <script src="js/main.js"></script>

  <!--===============================================================================================-->
  <script src="js/cep.js"></script>
  <script src="js/mask.js"></script>
  <script src="js/valida.js"></script>
  <script src="js/validaimg.js"></script>

</body>

</html>