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
    	
      <table class="table table-hover table-striped table-bordered justify-content-center text-center" id="tablepedido">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col" style="width: 50%">Nome</th>
		      <th scope="col" style="width: 10%">Telefone</th>
		      <th scope="col" style="width: 20%">Endereço</th>	
		      <th scope="col" style="width: 10%">Total</th>		      
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$db_host = "localhost";
			$username="root";
			$password="";
			$db='carrinhodecompras';
			$sdb =mysqli_connect($db_host,$username,$password,$db);		  
		  	$query = "SELECT SUM(total) AS suma, nome, telefone, endereco FROM pedido GROUP BY telefone ORDER BY suma DESC";
		  	$arr = mysqli_query($sdb, $query);
		  	$i=0;

		  	while (	$f=mysqli_fetch_array($arr)) {
		  		if($i % 2 == 0){
		  		?>
		  			<tr class="table-primary">
				      <th><?php echo $f['nome'];?></th>				      	
				      <td><?php echo $f['telefone'];?></td>
				      <td><?php echo $f['endereco'];?></td>	
				      <td><?php echo $f['suma'];?></td>				      			      
				    </tr>

		  		<?php
		  		}
		  		else{
		  			?>
		  			<tr class="table-warning">				      		     
				      <th><?php echo $f['nome'];?></th>				      	
				      <td><?php echo $f['telefone'];?></td>
				      <td><?php echo $f['endereco'];?></td>	
				      <td><?php echo $f['suma'];?></td>							      			      
				    </tr>
		  			<?php
		  		}
		  		$i++; 
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