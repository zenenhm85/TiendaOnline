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
            <img class="card-img-top" src="img/cards/gin.jpg" alt="Gin">
            <div class="card-body">
              <h5 class="card-title">GIN - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
             <a href="carrito.php?id=31&nome=GIN&preco=350&img=gin.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/cachaca.jpg" alt="Cachaca">
            <div class="card-body">
              <h5 class="card-title">CACHAÇA - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
             <a href="carrito.php?id=32&nome=CACHAÇA&preco=350&img=cachaca.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/rb.jpg" alt="Russian Bear">
            <div class="card-body">
              <h5 class="card-title">RUSSIAN BEAR - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=33&nome=RUSSIAN BEAR&preco=350&img=rb.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>   
        </div>       
      </section>
      <br>
       <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/roskoff.jpg" alt="roskoff">
            <div class="card-body">
              <h5 class="card-title">ROSKOFF - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=34&nome=ROSKOFF&preco=350&img=roskoff.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/gordons.jpg" alt="gordons">
            <div class="card-body">
              <h5 class="card-title">GORDON´S - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
             <a href="carrito.php?id=35&nome=GORDON´S&preco=350&img=gordons.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/larios.jpg" alt="larios.jpg">
            <div class="card-body">
              <h5 class="card-title">LARIOS - 350 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=36&nome=LARIOS&preco=350&img=larios.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
        </div>          
      </section>
      <br>
    </div>
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item"><a class="page-link" href="wisky.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">1</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php">2</span></a></li>
    <li class="page-item active"><a class="page-link" href="vodka.php">3<span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">4</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">5</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>