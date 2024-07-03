<?php
include("../php/valida.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
  <script>
    window.onload = setTimeout(function() {
      window.location.href = "../php/logout.php";
    }, 600000);
  </script>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Fran Sistemas - Dashboard </title>
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
    }
    else
    {
      document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
    }
  </script>
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
                  <li class="active"> <a href="index.php">
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
                  echo "<li> <a href=''>
                  <i class='fa fa-pencil-square-o'></i> Formulários
                  <i class='fa arrow'></i>
                  </a>
                  <ul>
                  <li> <a href='form-adm.php'>
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
       <article class="content responsive-tables-page">
        <div class="logol">
          <img src="../img/logo-large.png">
        </div>
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
  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>
</body>

</html>