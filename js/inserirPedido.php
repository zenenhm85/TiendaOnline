<?php
	session_start();

	$db_host = "localhost";
	$username="root";
	$password="";
	$db='carrinhodecompras';
	$sdb =mysqli_connect($db_host,$username,$password,$db);	


	$arreglo=$_SESSION['carrito'];
	$nome = $_POST['Nome'];
	$telefone = $_POST['Telefone'];
	$endereco = $_POST['Endereco'];
	$obs = $_POST['Observacao'];
	$data = date("d")."/".date("m")."/".date("Y");
	$hora = date("H").":".date("i");
	$total = 0;
	$produtos = "";
	$subtotal = 0;
	for($i=0;$i<count($arreglo);$i++){
		$newquantidad = $arreglo[$i]['quantidade'];
		$id = $arreglo[$i]['id']; 
		$ubpdate = "UPDATE produto SET quantidade = quantidade + '$newquantidad' WHERE id = '$id'";
		mysqli_query($sdb,$ubpdate);
		$total+=$arreglo[$i]['preco']*$arreglo[$i]['quantidade'];
		$subtotal = $arreglo[$i]['preco']*$arreglo[$i]['quantidade'];
		$produto = "".$arreglo[$i]['nome']."->".$arreglo[$i]['quantidade']; 
		if(count($arreglo)> 1){
			if($i == 0){
				$produtos= $produto;
			}
			else{
				$produtos= $produtos."\n".$produto;
			}
		}
		else{
			$produtos= $produto;
		}
		
	}

	$cons = "INSERT INTO pedido(produtos, total, nome, telefone, endereco, obs,data,hora) VALUES('".$produtos."', '".$total."', '".$nome."','".$telefone."', '".$endereco."','".$obs."','".$data."', '".$hora."')";
	$query = mysqli_query($sdb,$cons);

	if($query){
		echo "1";
		unset($_SESSION['carrito']);		
		
	}
	else{
		echo "Error: ". mysqli_error($sdb);		
	}

?>