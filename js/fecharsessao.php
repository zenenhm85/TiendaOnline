<?php
	session_start();
	
	if(isset($_SESSION['Usuario'])) {
		unset($_SESSION['Usuario']);
	}
?>