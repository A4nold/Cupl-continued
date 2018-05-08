<?php 

	session_start();

	if (session_destroy()) {
		# code...
		header("Location: ../signin.php");
	}
 ?>