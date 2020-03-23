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

<!-- CARDS-----------------------------------------------------------------------------------------------.-->
    <br>
    <div class="container" id="ancla">
      <section>
      	<div class="card-deck justify-content-center produto">
      	<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
				$lista=$_SESSION['carrito'];
				if(isset($_GET['nome'])){
					$dadosNovos=array('nome'=>$_GET['nome'],
										'preco'=>$_GET['preco'],
										'img'=>$_GET['img'],
										'quantidade'=>1,
										'id'=>$_GET['id']
									);

					$datos=$_SESSION['carrito'];	
					$existe =0;
					for ($k=0; $k < count($datos); $k++) { 
						if($datos[$k]['id']==$_GET['id']){
							$existe = 1;
							break;
						}
					}
					if ($existe == 0) {
						array_push($lista, $dadosNovos);				
					}

					$_SESSION['carrito']=$lista;

				}
				
				$datos=$_SESSION['carrito'];	

				for($i=0;$i<count($datos);$i++){

		?>
				<div class="card text-center probando">
		            <img class="card-img-top" src="img/cards/<?php echo $datos[$i]['img'];?>" alt="<?php echo $datos[$i]['nome'];?>">
		            <div class="card-body">
		              <h5 class="card-title"><?php echo $datos[$i]['nome'];?></h5>
		              <h6 class="card-title"><?php echo $datos[$i]['preco'];?></h6>		             
		            </div>
		            <h6 class="card-title subtotal" data-total="<?php echo $datos[$i]['preco'] * $datos[$i]['quantidade'];?>">Subtotal: "<?php echo $datos[$i]['preco'] * $datos[$i]['quantidade'];?>"</h6>
		            <form>
		            	<div class="form-group">
		            		<input type="number" value="<?php echo $datos[$i]['quantidade']?>" min="1" class="form-control quantidade" data-preco ="<?php echo $datos[$i]['preco'];?>" data-id = "<?php echo $datos[$i]['id'];?>" onkeypress='return event.charCode >= 0 && event.charCode <= 1 '>
		            	</div>
		            </form>
		            <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['id']?>" data-subtotal="<?php echo $datos[$i]['preco'] * $datos[$i]['quantidade'];?>">Eliminar</a>
		            <br>
		            
		         </div>

		<?php
				$total+= $datos[$i]['preco'] * $datos[$i]['quantidade'];
				}


			}
			else{?>

				 <?php
				 if(isset($_GET['nome'])){
				 	?>

				 	<div class="card text-center probando">
		            <img class="card-img-top" src="img/cards/<?php echo $_GET['img'];?>" alt="<?php $_GET['nome'];?>">
		            <div class="card-body">
		              <h5 class="card-title"><?php echo $_GET['nome'];?></h5>
		              <h6 class="card-title"><?php echo $_GET['preco'];?></h6>		              
		            </div>
		            <h6 class="card-title subtotal" data-total="<?php echo $_GET['preco'];?>">Subtotal: <?php echo $_GET['preco'];?></h6>
		            <form>
		            	<div class="form-group">
		            		<input type="number" value="1" min="1" class="form-control quantidade" data-preco ="<?php echo $_GET['preco'];?>"  data-id = "<?php echo $_GET['id'];?>" onkeypress='return event.charCode >= 0 && event.charCode <= 1'>
		            	</div>
		            </form>
		             <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['id']?>" data-subtotal="<?php echo $_GET['preco'];?>">Eliminar</a>
		           <br>
		            
		         </div>


				 <?php
					 $dadosNovos[]=array('nome'=>$_GET['nome'],
										'preco'=>$_GET['preco'],
										'img'=>$_GET['img'],
										'quantidade'=>1,
										'id'=>$_GET['id']
									);
					$_SESSION['carrito']=$dadosNovos;
					$total = $_GET['preco'];
				 }
				 else{
				 	echo "<div class='card-deck justify-content-center produto'><p class='text-uppercase text-center'>Ainda não existem pedidos que mostrar</p></div";
				 }
				 
				
			}
				
		?>
        </div> 

      </section>      
    </div>    
    <br>
    <div class="container">
		<div class="row justify-content-center">
			<h1 class="h1 text-uppercase text-center"><strong>Total: </strong> <strong class="total" data-total="<?php echo $total;?>" style="color: blue"><?php echo $total;?></strong></h1>			
		</div>				
	</div>   <br>
	<?php 
		if(isset($_SESSION['carrito'])){
			?>
			<div class="container">
				<div class="row justify-content-center">
					<form class="form-inline">
					  <label class="sr-only" for="inlineFormInputName2">Nome completo</label>
					    <input type="text" name="nome" id="nome" class="form-control mb-2 mr-sm-2 test" placeholder="Nome completo" required>
					  <label class="sr-only" for="inlineFormInputGroupUsername2">Telefone</label>
					  <div class="input-group mb-2 mr-sm-2">
					    <input type="text" id = "telefone" name="telefone" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Telefone" required maxlength="9">
					  </div>
					  <label class="sr-only" for="inlineFormInputGroupUsername2">Endereço</label>
					  <div class="input-group mb-2 mr-sm-2">
					    <input type="text" name="endereco" id="endereco" class="form-control test" id="inlineFormInputGroupUsername2" placeholder="Endereço" required maxlength="100">
					  </div>
					  <label class="sr-only" for="inlineFormInputGroupUsername2">Observações</label>
					  <div class="input-group mb-2 mr-sm-2">
					    <input type="text" name="obs" class="form-control obs" id="inlineFormInputGroupUsername2" placeholder="Observações" required maxlength="100">
					  </div>					  
					  <!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  Enviar o Pedido
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Enviando Pedido</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>Tem certeza que pretende enviar este pedido com o valor total de: <strong class="total2" data-total="<?php echo $total;?>" style="color: blue"><?php echo $total;?></strong> ?. Será atendido brevemente</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
						        <button type="button" id="Sim" class="btn btn-primary">Sim</button>
						      </div>
						    </div>
						  </div>
						</div>
					</form>
				</div>					
			</div>   

			<?php
		}

	?>
	 
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item"><a class="page-link" href="index.php#carousel">Comida</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php#carousel">Cerveja</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php#carousel">Wisky</a></li>
    <li class="page-item"><a class="page-link" href="vodka.php#carousel">Vodka</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php#carousel">Refrigerantes</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php#carousel">Cartões de saldo</a></li>

  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>
