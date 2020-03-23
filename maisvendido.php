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
		      <th scope="col" style="width: 70%">Nome</th>
		      <th scope="col" style="width: 15%">Preço</th>
		      <th scope="col" style="width: 15%">Quantidade</th>		      
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$db_host = "localhost";
			$username="root";
			$password="";
			$db='carrinhodecompras';
			$sdb =mysqli_connect($db_host,$username,$password,$db);		  
		  	$query = "SELECT * FROM produto ORDER BY quantidade DESC";
		  	$arr = mysqli_query($sdb, $query);
		  	$i=0;

		  	while (	$f=mysqli_fetch_array($arr)) {
		  		if($i % 2 == 0){
		  		?>
		  			<tr class="table-primary">
				      <th><?php 
				        if($f['id']=='35'){
				        	echo "GORDON´S";
				        }
				        elseif($f['id']=='42'){
				        	echo "ÁGUA PEQUENA";
				        }
				        elseif ($f['id']=='32') {
				        	echo "CACHAÇA";
				        }
				        elseif ($f['id']=='4') {
				        	echo "HAMBÚRGUER";
				        }
				        elseif ($f['id']=='25') {
				        	echo "N´GOLA";
				        }
				        elseif ($f['id']=='26') {
				        	echo "N´GOLA PEQUENA";
				        }
				        elseif ($f['id']=='41') {
				        	echo "ÁGUA GRANDE";
				        }
				        else{
				        	echo $f['nome'];
				        }
				      ?>				      	
				      </th>
				      <td><?php echo $f['preco'];?></td>
				      <td><?php echo $f['quantidade'];?></td>				      			      
				    </tr>

		  		<?php
		  		}
		  		else{
		  			?>
		  			<tr class="table-warning">
				      <th><?php 
				        if($f['id']=='35'){
				        	echo "GORDON´S";
				        }
				        elseif($f['id']=='42'){
				        	echo "ÁGUA PEQUENA";
				        }
				        elseif ($f['id']=='32') {
				        	echo "CACHAÇA";
				        }
				        elseif ($f['id']=='4') {
				        	echo "HAMBÚRGUER";
				        }
				        elseif ($f['id']=='25') {
				        	echo "N´GOLA";
				        }
				        elseif ($f['id']=='26') {
				        	echo "N´GOLA PEQUENA";
				        }
				        elseif ($f['id']=='41') {
				        	echo "ÁGUA GRANDE";
				        }
				        else{
				        	echo $f['nome'];
				        }
				      ?>				      	
				      </th>
				      <td><?php echo $f['preco'];?></td>
				      <td><?php echo $f['quantidade'];?></td>				      			      
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