<?php
	session_start();

	$db_host = "localhost";
	$username="root";
	$password="";
	$db='carrinhodecompras';
	$sdb =mysqli_connect($db_host,$username,$password,$db);

	$id = $_POST['Id'];	

	$cons = "UPDATE pedido SET pronto = '1' WHERE id = '$id'";
	$query = mysqli_query($sdb,$cons);

	if($query){
		echo "1";
	}
	else{
		echo "0";
	}
?>