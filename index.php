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
      <?php

        if(isset($_GET['pedidolisto'])){
          ?>
            <div class="alert alert-dismissible fade show justify-content-center text-center alert-primary" role="alert">
              <strong>O seu pedido foi enviado com sucesso!!! Por favor aguarde que será atendido em breve.</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
          unset($_SESSION['pedidolisto']);   
        }

      ?>
      
<!-- CARDS-----------------------------------------------------------------------------------------------.-->
    <br>
    <div class="container">
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/sandesm.jpg" alt="Sandes Mista">
            <div class="card-body">
              <h5 class="card-title">SANDES MISTA - 700 KZ</h5>
              <p class="card-text">Pão, mayonese, ketchup, salada de cenoura, batata, ovo, fiambre, queijo e chourição</p>             
            </div>
            <a href="carrito.php?id=1&nome=SANDES MISTA&preco=700&img=sandesm.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/sandess.jpg" alt="Sandes Simples">
            <div class="card-body">
              <h5 class="card-title">SANDES SIMPLES - 500 KZ</h5>
              <p class="card-text">Pão, fiambre, queijo e chourição</p>               
            </div>
            <a href="carrito.php?id=2&nome=SANDES SIMPLES&preco=500&img=sandess.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/hotdog.jpg" alt="Hotdog">
            <div class="card-body">
              <h5 class="card-title">CACHORRO(HOT GOG) - 550 KZ</h5>
              <p class="card-text">Pão, mayonese, ketchup, cenoura, batata, ovo e salsicha</p>               
            </div>
            <a href="carrito.php?id=3&nome=CACHORRO&preco=550&img=hotdog.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div> 
        </div>             
      </section>
      <br>
      <section>
        <div class="card-deck">          
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/hamburguer.jpg" alt="HAMBÚRGUER">
            <div class="card-body">
              <h5 class="card-title">HAMBÚRGUER - 1000 KZ</h5>
              <p class="card-text">Pão, mayonese, ketchup, carne de vaca, salada de cenoura, batata, ovo, fiambre, queijo e chourição</p>
               
            </div>
            <a href="carrito.php?id=4&nome=HAMBÚRGUER&preco=1000&img=hamburguer.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/amechicana.jpg" alt="Cuca-Lata">
            <div class="card-body">
              <h5 class="card-title">AMECHICANA - 700 KZ</h5>
              <p class="card-text">Carne em pedaços</p>
               
            </div>
            <a href="carrito.php?id=5&nome=AMECHICANA&preco=700&img=amechicana.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/kfc.jpg" alt="Cuca-Lata">
            <div class="card-body">
              <h5 class="card-title">KFC - 1000 KZ</h5>
              <p class="card-text">Frango com batatas</p>               
            </div>
            <a href="carrito.php?id=9&nome=KFC&preco=1000&img=kfc.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div> 
        </div>            
      </section>          
    </div>
    <br>
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item disabled"><a class="page-link" href="cartoes.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">2</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php#">3</a></li>
    <li class="page-item"><a class="page-link" href="vodka.php">4</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">5</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">6</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->

<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>