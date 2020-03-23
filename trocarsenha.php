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
    	<div class="row justify-content-center">
    	<?php
    	if(!empty($_POST['senhaanterior'])){
    		$db_host = "localhost";
			$username="root";
			$password="";
			$db='carrinhodecompras';
			$sdb =mysqli_connect($db_host,$username,$password,$db);
			$user = $_SESSION['Usuario'];
			$senhaanterior = $_POST['senhaanterior'];
			$query = "SELECT * FROM usuario WHERE (nome='".$user."' AND senha='".$senhaanterior."')";
			$arr = mysqli_query($sdb, $query);
			$f=mysqli_fetch_array($arr);
			$novasenha = $_POST['novasenha'];
	
			if(count($f)>0){
				if(($_POST['novasenha'] == $_POST['repnovasenha']) && strlen($novasenha)>=6 ){

					$query = "UPDATE usuario SET senha = '$novasenha' WHERE nome='$user' ";
					$arr = mysqli_query($sdb, $query);
					?>
						<h2 class="h3 justify-content-center text-center">Palavra passe alterada. <a href="index.php#carousel"> Inicio </a></h2>
					<?php 
				}
				else{
					?>
					<h3 class="h3 justify-content-center text-center">Esteja seguro de que a palavra passe introduzida seja correta e que tenha mais de 5 caracteres. <a href="trocarsenha.php">Trocar palavra passe</a></h3>
					<?php 
				}			
			}
			else{
				?>
					<h2 class="h3 justify-content-center text-center">Não esta certa a palavra passe anterior. <a href="trocarpalavrapasse.php">Trocar palavra passe</a></h2>
				<?php 
			}

			
    	}
    	else{
    		?>
    		<form action="trocarsenha.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">palavra passe Atual</label>
			    <input type="password" class="form-control" id="senhaanterior" name="senhaanterior">
			    <small id="emailHelp" class="form-text text-muted">Precisa introduzir a palavra passe anterior para poder trocá-la</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nova palavra passe</label>
			    <input type="password" class="form-control" id="novasenha" name="novasenha" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword2">Repetir Nova palavra passe</label>
			    <input type="password" class="form-control" id="repnovasenha" name="repnovasenha" required>
			  </div>		  
			  <button type="submit" class="btn btn-primary btn-lg">Trocar</button>
		   </form>

    		<?php
    	}
    ?>
	    	
    	</div>
        
	</div>
	   <br><br>


<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>