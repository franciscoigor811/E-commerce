<?php 
session_start();

if(!isset($_SESSION['carrinho'])){ 
  $_SESSION['carrinho'] = array(); 
} //adiciona produto 

if(!isset($_SESSION['subtotal'])){ 
  $_SESSION['subtotal'] = array(); 
}
  
if(isset($_GET['acao'])){ 
  //ADICIONAR CARRINHO 
  if($_GET['acao'] == 'add'){ 
    $id = intval($_GET['id']);
    $qtde = intval($_GET['qtde']);
    if ($qtde == 0) {
      NULL;
    } else {
      include_once("conecta.php");
      $sql = "SELECT * FROM tb_produto WHERE id= '$id'";
      $result = mysqli_query($conecta, $sql);
      if(mysqli_num_rows($result) > 0) {
        if(!isset($_SESSION['carrinho'][$id])){ 
          $_SESSION['carrinho'][$id] = $qtde;
        } else { 
          $_SESSION['carrinho'][$id] += $qtde;
        }
      }
    }
  } //REMOVER CARRINHO 

  if($_GET['acao'] == 'del'){ 
    $id = intval($_GET['id']); 
    if(isset($_SESSION['carrinho'][$id])){ 
      unset($_SESSION['carrinho'][$id]); 
      unset($_SESSION['subtotal'][$id]);
    } 
  } //ALTERAR QUANTIDADE 
  if($_GET['acao'] == 'up'){ 
    if(count($_SESSION['carrinho']) == 0) {
      NULL;
    } else {
      if(is_array($_POST['prod'])){ 
        foreach($_POST['prod'] as $id => $qtd) {
          include_once("conecta.php");
          $id  = intval($id);
          $qtd = intval($qtd);

          $sqlup = "SELECT valor FROM tb_produto WHERE id= '$id'";
          $resultup = mysqli_query($conecta, $sqlup);
          $consultaup = mysqli_fetch_assoc($resultup);

          if(!empty($qtd) || $qtd <> 0){
            $_SESSION['carrinho'][$id] = $qtd;
            $_SESSION['subtotal'][$id] = $consultaup['valor']*$qtd;
          }else{
            unset($_SESSION['carrinho'][$id]);
            unset($_SESSION['subtotal'][$id]);
          }
        }
      }
    }
  }

}

foreach($_SESSION['carrinho'] as $id => $qtd) {
  if($qtd > 10) {
    $_SESSION['carrinho'][$id] = 10;
  }
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Carrinho - Sabor & Amor</title>
  <link rel="stylesheet" type="text/css" href="../css/carrinho.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.0/b-1.5.2/kt-2.4.0/rg-1.0.3/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.0/b-1.5.2/kt-2.4.0/rg-1.0.3/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros por página",
          "zeroRecords": "Nada encontrado - desulpe",
          "info": "Mostrando página _PAGE_ de _PAGES_",
          "infoEmpty": "Nenhum registro disponível",
          "infoFiltered": "(filtrado de _MAX_ registros totais)",
          "sSearch": "Pesquisar:",
          "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
          },
          "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
          }
        }
      } );
    } );
  </script>

</head>
<body>
  <header>
    <nav>
      <div class="nav">
        <p>Carrinho de Compras</p>
      </div>
    </nav>
  </header>
  <form action="?acao=up" method="post">
  <div class="container" style="width:90vw !important">
    <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
            <th>Remover</th>
          </tr>
        </thead>
          <tbody>
          <?php
            if(count($_SESSION['carrinho']) == 0){
              echo '
              <tr>
              <td colspan="5">Não há produtos no carrinho</td>
              </tr>
              ';
              $total = intval(0);
              echo '<tr id="info">
              <td class="text-center"><a href="../cardapio.php" class="btn btn-danger">Voltar</a></td>
              <td id="total" class="text-right font-weight-bold" colspan="3">Total:</td>
              <td class="font-weight-bold">R$ '.$total.'</td>
              </tr></tfoot>';
            } else {
              require("conecta.php");
              $total = 0;
              foreach($_SESSION['carrinho'] as $id => $qtd){
                $sql   = "SELECT *  FROM tb_produto WHERE id= '$id'";
                $qr    = mysqli_query($conecta, $sql) or die(mysqli_error());
                $ln    = mysqli_fetch_assoc($qr);
                $nome  = $ln['nome'];
                $valor = number_format($ln['valor'], 2, ',', '.');
                $sub   = number_format($ln['valor'] * $qtd, 2, ',', '.');
                $_SESSION['subtotal'][$id] = floatval(str_replace(array(".", ","), array("", "."), $sub));
                $total += $ln['valor'] * $qtd;
                echo '
                <tr>       
                <td>'.$nome.'</td>
                <td><input type="number" min="0" max="10" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                <td>R$ '.$valor.'</td>
                <td>R$ '.$sub.'</td>
                <td class="text-center size-24"><a href="?acao=del&id='.$id.'"><i class="fa fa-times"></i></a></td>
                </tr>';
              }
              $total = number_format($total, 2, ',', '.');
              $total2 = floatval(str_replace(array(".", ","), array("", "."), $total));
              echo "</tbody><tfoot>";
              echo '<tr>
              <td class="text-center"><a href="../cardapio.php" class="btn btn-danger">Voltar</a></td>
              <td class="text-center" colspan="2"><input type="submit" class="btn btn-info" value="Atualizar Carrinho" /></td>
              </form>
              <td id="total" class="text-right font-weight-bold">Total:</td>
              <td class="font-weight-bold">R$ '.$total.'</td>
              </tr>';
              if (!isset($_SESSION['id'])) {
                echo NULL;
              } else {
                echo '<tr>
                <td colspan="5">
                <form action="insert_venda.php" method="get">
                <input name="total" type="hidden" value="'.$total2.'">
                <label>Método de Pagamento:</label>
                <select name="condicao" required class="form-control">';
                $sql = "SELECT * FROM tb_condicao WHERE status='1'";
                $result = mysqli_query($conecta,$sql);
                while ($consulta = mysqli_fetch_assoc($result)) {
                  echo '<option value="'.$consulta['id'].'">'.$consulta['nome'].'</option>';
                }
                echo '</select>
                <br>
                <button type="submit" class="btn btn-success w-100">Finalizar Compra</button>
                </form>
                </td>
                </tr></tfoot>';
              }
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</body>
</html>