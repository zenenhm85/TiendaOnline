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
    <title>José F. Mateus - Vodka</title>
  </head>
  <body>
      <!--HEADER--------------------------------------------------------------.-->
      <?php include  'header.php';?>
      <!--FIM HEADER-----------------------------------------------------------.-->
<!-- CARDS-----------------------------------------------------------------------------------------------. -->
    <br>
    <div class="container">
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/u500.jpg" alt="Unitel 500">
            <div class="card-body">
              <h5 class="card-title">SALDO UNITEL 50 UTT- 500 KZ</h5>
              <p class="card-text">Cartão de recarga Unitel. Nós fazemos a depender  do valor do cliente, partindo de 350 KZ em diante. </p>               
            </div>
            <a href="carrito.php?id=47&nome=SALDO UNITEL&preco=500&img=u500.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/u1000.jpg" alt="Unitel 1000">
            <div class="card-body">
              <h5 class="card-title">SALDO UNITEL 100 UTT - 1000 KZ</h5>
              <p class="card-text">Cartão de recarga Unitel. Nós fazemos a depender  do valor do cliente, partindo de 350 KZ em diante. </p>               
            </div>
            <a href="carrito.php?id=48&nome=SALDO UNITEL&preco=1000&img=u1000.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/u1250.jpg" alt="Unitel 1250">
            <div class="card-body">
              <h5 class="card-title">SALDO UNITEL 125 UTT - 1250 KZ</h5>
              <p class="card-text">Cartão de recarga Unitel. Nós fazemos a depender  do valor do cliente, partindo de 350 KZ em diante. </p>               
            </div>
             <a href="carrito.php?id=49&nome=SALDO UNITEL&preco=1250&img=u1250.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>   
        </div>       
      </section>
      <br>
       <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/movicel500.jpg" alt="Movicel">
            <div class="card-body">
              <h5 class="card-title">SALDO MOVICEL - 500 KZ</h5>
              <p class="card-text">Cartão de recarga movicel</p>               
            </div>
            <a href="carrito.php?id=50&nome=SALDO MOVICEL&preco=500&img=movicel500.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/movicel700.jpg" alt="Movicel">
            <div class="card-body">
              <h5 class="card-title">SALDO MOVICEL - 700 KZ</h5>
              <p class="card-text">Cartão de recarga movicel</p>               
            </div>
           <a href="carrito.php?id=51&nome=SALDO MOVICEL&preco=700&img=movicel700.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/movicel900.jpg" alt="Movicel">
            <div class="card-body">
              <h5 class="card-title">SALDO MOVICEL - 900 KZ</h5>
              <p class="card-text">Cartão de recarga movicel</p>               
            </div>
            <a href="carrito.php?id=52&nome=SALDO MOVICEL&preco=900&img=movicel900.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
        </div>          
      </section>
      <br>
    </div>
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item"><a class="page-link" href="refrigerante.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">1</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php">2</span></a></li>
    <li class="page-item "><a class="page-link" href="vodka.php">3</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">4</a></li>
    <li class="page-item active"><a class="page-link" href="cartoes.php">5 <span class="sr-only">(current)</span></a></li>
    <li class="page-item disabled"><a class="page-link" href="#">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<br>
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>