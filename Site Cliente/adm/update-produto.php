<?php
  session_start();
  include("../php/conecta.php");
  include("../php/redirect.php");
  include("../php/dash.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Sabor & Amor</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Usuário: <?php echo $nome;?></a>
            <a class="dropdown-item" href="#">Cargo: <?php echo $cargo;?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabelas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <?php
              if ($acesso == 1) {
                echo '<a class="dropdown-item" href="table_adm.php">Administrador</a>';
              } else {
                NULL;
              }
            ?>
            <a class="dropdown-item" href="table_msg.php">Mensagem</a>
            <a class="dropdown-item" href="table_comida.php">Comidas</a>
            <a class="dropdown-item" href="table_bebida.php">Bebidas</a>
            <a class="dropdown-item" href="table_vendas.php">Vendas</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-pencil-alt"></i>
            <span>Formulários</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <?php
              if ($acesso == 1) {
                echo '<a class="dropdown-item" href="register.php">Administrador</a>';
              } else {
                NULL;
              }
            ?>
            <a class="dropdown-item" href="form_produto.php">Produto</a>
          </div>
        </li>
      </ul>

       <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Editar Produto</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tabela de Produto</div>
            <div class="card-body">
              <?php
                include("../php/conecta.php");
                $id = $_GET['id'];

                $sql = "SELECT * FROM tb_produto WHERE id=$id";
                $result = mysqli_query($conecta,$sql);
                $consulta = mysqli_fetch_array($result);
                if(!isset($consulta)) {
                  echo "<script> alert('ID inválido'); </script>";
                  redirect("table_adm.php");
                }
                mysqli_free_result($result);
                mysqli_close($conecta);
              ?>
              <form method="post" action="../php/update_produto.php" enctype="multipart/form-data">
                <?php
                  echo "<input type='text' name='id' value='$consulta[id]' hidden>";
                ?>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-10">
                      <div>
                        <?php echo "<input class='form-control form-control-lg' name='nome' type='text' placeholder='Nome' value='$consulta[nome]'>" ?>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">R$</div>
                          </div>
                          <?php echo "<input name='valor' class='form-control form-control-lg' type='number' min='0' max='200' step='any' value='$consulta[valor]'>"; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <?php echo "<input class='form-control form-control-lg' type='text' name='unidade' placeholder='Unidade' value='$consulta[unidade]'>"; ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tipo:</label>
                  <select class="form-control form-control-lg" name="tipo" required>
                    <?php
                      if($consulta['tipo'] == 'comida')
                        echo "<option disabled hidden value=''> -- Tipo -- </option>
                              <option value='comida' selected>Comida</option>
                              <option value='bebida'>Bebida</option>";
                      elseif($consulta['tipo'] == 'bebida')
                        echo "<option disabled hidden value=''> -- Tipo -- </option>
                              <option value='comida'>Comida</option>
                              <option value='bebida' selected>Bebida</option>";
                      else
                        echo "<option disabled hidden value='' selected> -- Tipo -- </option>
                              <option value='comida'>Comida</option>
                              <option value='bebida'>Bebida</option>";
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Imagem do produto:</label>
                  <input type="file" class="form-control-file" name="imagem" id="imagem">
                </div>
                <button class="btn btn-primary btn-block" type="submit" id="botão" name="botão" value="Enviar">Editar</a>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Sabor & Amor 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
            <a class="btn btn-primary" href="../php/logout.php">Sim</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/cep.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/valida-update.js"></script>
    <script src="js/checkbox.js"></script>
    <script>
      $(document).ready(function(){
        $('#botão').click(function(){
          var nome = $('#imagem').val();
          if (nome == '') {
            
          } else {
            var ext = $('#imagem').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
              alert("Por favor selecione uma imagem válida");
              $('#imagem').val('');
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>
