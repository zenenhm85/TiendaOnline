<?php
session_start();
	$arreglo=$_SESSION['carrito'];
	$total=0;
	$numero=0;
	for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['id']==$_POST['Id']){
			$numero=$i;
		}
	}
	$arreglo[$numero]['quantidade']=$_POST['Quantidade'];
	for($i=0;$i<count($arreglo);$i++){
		$total=($arreglo[$i]['preco']*$arreglo[$i]['quantidade'])+$total;
	}
	$_SESSION['carrito']=$arreglo;
	echo $total;

?>