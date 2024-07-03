<?php
  session_start();

  if (!isset($_SESSION['msg'])) {
    $_SESSION['msg'] = "DEFAULT";
  }
  if ($_SESSION['msg']=="ok"){
    $texto = ("<div class='success'><b>Sucesso!</b> Usuário cadastrado com sucesso.</div>");
  }
  elseif ($_SESSION['msg']=="er") {
    $texto = ("<div class='error'><b>Erro!</b> Ocorreu um erro ao tentar cadastrar o usuário.</div>");
  }
  else{
    $texto = NULL;
  }

  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/msg.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php
					echo $texto;
				?>
				<form class="login100-form validate-form" method="POST" action="../php/bd_bolinho.php">
					<span class="login100-form-title p-b-26">
						Cadastro
					</span>
					<span class="login100-form-title p-b-48">
						<a href="../index.php"><img src="img/logo-small.png" class="logo-min"></a>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Digite um nome válido">
						<input class="input100" type="text" id="nome" name="nome">
						<span class="focus-input100" data-placeholder="Nome"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um endereço de e-mail válido (Ex.: email@email.com)">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite uma senha válida">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="senha" name="senha">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>                     

					<div class="wrap-input100 validate-input" id="divCPF" data-validate = "Digite um CPF válido">
						<input class="input100" type="text" id="cpf" name="cpf" onblur="cpfCheck(this)" onkeyup="maskIt(this,event,'###.###.###-##')" maxlength="14">
						<span class="focus-input100" data-placeholder="CPF"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um CEP válido">
						<input class="input100" type="text" id="cep" name="cep" value="" size="10" maxlength="10"  onkeyup="maskIt(this,event,'##.###-###')" onblur="pesquisacep(this.value);" />
						<span class="focus-input100" data-placeholder="CEP"></span>
					</div> 

					<div class="wrap-input100 validate-input" data-validate = "Digite uma rua válida">
						<input class="input100" type="text" id="rua" name="rua">
						<span class="focus-input100" data-placeholder="Rua"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um número válido">
						<input class="input100" type="text" id="numero" name="numero">
						<span class="focus-input100" data-placeholder="Número"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" id="complemento" name="complemento">
						<span class="focus-input100" data-placeholder="Complemento"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um bairro válido">
						<input class="input100" type="text" id="bairro" name="bairro">
						<span class="focus-input100" data-placeholder="Bairro"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite uma cidade válida">
						<input class="input100" type="text" id="cidade" name="cidade">
						<span class="focus-input100" data-placeholder="Cidade"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um estado válido">
						<input class="input100" type="text" id="uf" name="estado">
						<span class="focus-input100" data-placeholder="Estado"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="botão" type="submit">
								Cadastrar
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Já tem uma conta?
						</span>

						<a class="txt2" href="../Login_v2/login.php">
							Logar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!--===============================================================================================-->
	<script src="js/cep.js"></script>
	<script src="js/cpf.js"></script>
	<script src="../js/maskcel.js"></script>
	<script src="../js/mask.js"></script>

</body>
</html>