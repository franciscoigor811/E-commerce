<?php
	function redirect ($url) {
		if (headers_sent()) {
			echo "<script>
					window.location.href = '".$url."';
				  </script>";
		} else {
			header('Location: '.$url); end();
		}
		return null;
	}
?>