<?php
	include("redirect.php");
	session_start();
	session_destroy();
	redirect("../Login_v1/login.php");
?>