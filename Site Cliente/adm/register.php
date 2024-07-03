<?php
  session_start();
  include("../php/conecta.php");
  include("../php/redirect.php");
  include("../php/dash.php");
  include("../php/adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar uma Conta de Administrador</div>
        <div class="card-body">
          <form method="post" action="../php/insert_adm.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="nome" class="form-control" placeholder="Nome: " required autofocus="autofocus">
                    <label for="firstName">Nome</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de E-mail: " required>
                <label for="inputEmail">Endereço de E-mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="senha" class="form-control" onblur="buttonBlock()" placeholder="Senha: " required>
                    <label for="inputPassword">Senha</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" onblur="buttonBlock()" placeholder="Confirmar Senha: " required>
                    <label for="confirmPassword">Confirmar Senha</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="CPF" id="CPF" class="form-control" maxlength="14" onblur="buttonBlock()" onkeyup="maskIt(this,event,'###.###.###-##')" placeholder="CPF: " required>
                    <label for="CPF">CPF</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="CEP" name="CEP" class="form-control" maxlength="10" onblur="pesquisacep(this.value)" onkeydown="maskIt(this,event,'##.###-###')" placeholder="CEP: " required>
                    <label for="CEP">CEP</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="rua" name="rua" class="form-control" placeholder="Rua: " required>
                    <label for="rua">Rua</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputnumero" name="numero" class="form-control" placeholder="Número: " required>
                    <label for="inputnumero">Número</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputcomplemento" name="complemento" class="form-control" placeholder="Complemento: ">
                    <label for="inputcomplemento">Complemento</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro: " required>
                    <label for="bairro">Bairro</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-10">
                  <div class="form-label-group">
                    <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade: " required>
                    <label for="cidade">Cidade</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-label-group">
                    <input type="text" id="uf" name="uf" maxlength="2" class="form-control" placeholder="Estado: " required>
                    <label for="uf">Estado</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group">
                    <select class="form-control" name="acesso" required>
                      <option disabled selected hidden value=""> -- Nível de Acesso -- </option>
                      <option value='1'> Administrador </option>
                      <option value='2'> Funcionário </option>
                    </select>
                    <span class="focus-input100" data-placeholder="Acesso"></span>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" id="botão" href="table_adm.php">Registrar</a>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/cep.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/valida.js"></script>

  </body>

</html>
