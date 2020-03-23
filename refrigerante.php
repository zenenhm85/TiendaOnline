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
            <img class="card-img-top" src="img/cards/compal.jpg" alt="compal">
            <div class="card-body">
              <h5 class="card-title">SUMO PEQUENO - 250 KZ</h5>
              <p class="card-text">Sumo pequeno de frutas naturais</p>               
            </div>
            <a href="carrito.php?id=37&nome=SUMO PEQUENO&preco=250&img=compal.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/compal2.jpg" alt="compal">
            <div class="card-body">
              <h5 class="card-title">SUMO GRANDE - 500 KZ</h5>
              <p class="card-text">Sumo grande de frutas naturais</p>               
            </div>
            <a href="carrito.php?id=38&nome=SUMO GRANDE&preco=500&img=compal2.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/gososa lata.jpg" alt="Gasosa Lata">
            <div class="card-body">
              <h5 class="card-title">GASOSA LATA - 200 KZ</h5>
              <p class="card-text">Gasosa lata de todos os sabores e para todos os gostos</p>               
            </div>
            <a href="carrito.php?id=39&nome=GASOSA LATA&preco=200&img=gososa lata.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
        </div>       
      </section>
      <br>
       <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/fanta.jpg" alt="roskoff">
            <div class="card-body">
              <h5 class="card-title">GASOSA GARRAFA - 125 KZ</h5>
              <p class="card-text">Gasosa garrafa de todos os sabores e para todos os gostos. É necessário devolver o a garrafa vazia, nas diversas marcas como, Coca cola, Fanta, Sprite.</p>               
            </div>
            <a href="carrito.php?id=40&nome=GASOSA GARRAFA&preco=125&img=fanta.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/aguag.jpg" alt="ÁGUA GRANDE">
            <div class="card-body">
              <h5 class="card-title">ÁGUA GRANDE - 250 KZ</h5>
              <p class="card-text">Água grande bem fria e ótima qualidade. </p>               
            </div>
            <a href="carrito.php?id=41&nome=ÁGUA GRANDE&preco=250&img=aguag.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/aguap.jpg" alt="ÁGUA PEQUENA">
            <div class="card-body">
              <h5 class="card-title">ÁGUA PEQUENA - 150 KZ</h5>
              <p class="card-text">Água pequena bem fria e ótima qualidade.</p>               
            </div>
            <a href="carrito.php?id=42&nome=ÁGUA PEQUENA&preco=150&img=aguap.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
        </div>        
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/tonica.jpg" alt="Tonica">
            <div class="card-body">
              <h5 class="card-title">TONICA - 150 KZ</h5>
              <p class="card-text">Bebida energética bem fria, justo o que você necessita para recuperar forças</p>               
            </div>
            <a href="carrito.php?id=43&nome=TONICA&preco=150&img=tonica.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/speed.jpg" alt="Speed">
            <div class="card-body">
              <h5 class="card-title">SPEED - 250 KZ</h5>
              <p class="card-text">Bebida energética bem fria, justo o que você necessita para recuperar forças</p>               
            </div>
             <a href="carrito.php?id=44&nome=SPEED&preco=250&img=speed.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/xxl.jpg" alt="XXL">
            <div class="card-body">
              <h5 class="card-title">XXL - 250 KZ</h5>
              <p class="card-text">Bebida energética bem fria, justo o que você necessita para recuperar forças</p>               
            </div>
            <a href="carrito.php?id=45&nome=XXL&preco=250&img=xxl.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
        </div>        
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/booster.jpg" alt="Booster">
            <div class="card-body">
              <h5 class="card-title">BOOSTER - 250 KZ</h5>
              <p class="card-text">Bebida com 5 graus de álcool; saboroso sabor a cidra e bem fria</p>               
            </div>
            <a href="carrito.php?id=46&nome=BOOSTER&preco=250&img=booster.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>          
        </div>         
      </section>
      <br>
    </div>
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item"><a class="page-link" href="vodka.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">1</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php">2</span></a></li>
    <li class="page-item "><a class="page-link" href="vodka.php">3</a></li>
    <li class="page-item active"><a class="page-link" href="refrigerante.php">4<span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">5</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<br>
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>