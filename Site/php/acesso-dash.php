<?php
	if($acesso != 1) {
	  echo "<script>
	          alert('Acesso negado!');
	        </script>";
	  redirect('table-msg.php');
	}
?>