<?php 
	session_start();	
		
?>
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include  'common_head.php';?>
    
    <title>José F. Mateus</title>
  </head>
  <body>
      <!--HEADER--------------------------------------------------------------.-->
      <?php include  'header.php';?>
      <!--FIM HEADER-----------------------------------------------------------.-->
          

    <br>
    <div class="container">
    	<form >
		  <div class="form-group row justify-content-center text-center">
		    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Escolher a data:</strong></label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control-plaintext" id="datepedido" >
		    </div>
		  </div>		   
		</form>
      <table class="table table-hover table-striped table-bordered justify-content-center text-center" id="tablepedido">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col" style="width: 5%">#</th>
		      <th scope="col" style="width: 30%">Pedido</th>
		      <th scope="col" style="width: 5%">Total</th>
		      <th scope="col" style="width: 20%">Nome Completo</th>
		      <th scope="col" style="width: 5%">Telefone</th>
		      <th scope="col" style="width: 20%">Endereço</th>
		      <th scope="col" style="width: 20%">Observações</th>
		      <th scope="col" style="width: 5%">Hora</th>
		      <th scope="col" style="width: 5%">Pronto</th>
		      <th scope="col" style="width: 5%">Trocar estado</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$db_host = "localhost";
			$username="root";
			$password="";
			$db='carrinhodecompras';
			$sdb =mysqli_connect($db_host,$username,$password,$db);

			$data = "";

		  	if(!empty($_GET)){
		  		$data = $_GET['data'];		  		
		  	}
		  	else{
		  		
		  		$data = date("d")."/".date("m")."/".date("Y");
		  	}
			
		  	
		  	$query = "SELECT * FROM pedido WHERE data = '$data'";
		  	$arr = mysqli_query($sdb, $query);
		  	$i = 0;
		  	while (	$f=mysqli_fetch_array($arr)) {
		  		
		  		if($i % 2 != 0){
		  			?>
		  			<tr class="table-primary trtable">
				      <th scope="row"><?php echo $i + 1 ?></th>
				      <td><?php echo $f['produtos'];?></td>
				      <td><?php echo $f['total'];?></td>
				      <td><?php echo $f['nome'];?></td>
				      <td><?php echo $f['telefone'];?></td>
				      <td><?php echo $f['endereco'];?></td>
				      <td><?php echo $f['obs'];?></td>
				      <td><?php echo $f['hora'];?></td>
				      <td class="tdpronto" data-id="<?php echo $f['id'];?>"><?php if($f['pronto'] == '0'){echo "Não" ;}else{echo "Sim";}?></td>
				      <td >
				      	<?php
				      		if($f['pronto'] =='0'){
				      			?>
				      				<a href="#tablepedido" class="btn btn-primary btn-sm btnpedido" data-id = "<?php echo $f['id'];?>">Não</a>
				      			<?php 
				      		}
				      		else{
				      			?>
				      				<a href="#tablepedido" class="btn btn-dark btn-sm btnpedido disabled" data-id = "<?php echo $f['id'];?>">Sim</a>
				      			<?php 
				      		} 
				      	?>
				      	
				      </td>
				    </tr>

				<?php
		  		}
		  		else{
		  			?>
		  			<tr class="table-warning trtable">
				      <th scope="row"><?php echo $i + 1 ?></th>
				      <td><?php echo $f['produtos'];?></td>
				      <td><?php echo $f['total'];?></td>
				      <td><?php echo $f['nome'];?></td>
				      <td><?php echo $f['telefone'];?></td>
				      <td><?php echo $f['endereco'];?></td>
				      <td><?php echo $f['obs'];?></td>
				      <td><?php echo $f['hora'];?></td>
				      <td class="tdpronto" data-id="<?php echo $f['id'];?>"><?php if($f['pronto'] == '0'){echo "Não" ;}else{echo "Sim";}?></td>
				      <td >
				      	<?php
				      		if($f['pronto'] =='0'){
				      			?>
				      				<a href="#tablepedido" class="btn btn-primary btn-sm btnpedido" data-id = "<?php echo $f['id'];?>">Não</a>
				      			<?php 
				      		}
				      		else{
				      			?>
				      				<a href="#tablepedido" class="btn btn-dark btn-sm btnpedido disabled" data-id = "<?php echo $f['id'];?>">Sim</a>
				      			<?php 
				      		} 
				      	?>
				      	
				      </td>
				    </tr>
		  			<?php 
		  		}
		  		$i = $i + 1;	
			}
			?>	    
		  </tbody>
		</table>
    </div>
    <br>


<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>