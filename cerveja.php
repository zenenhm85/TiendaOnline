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
    <title>José F. Mateus - Cervejas</title>
  </head>
  <body>
      <!--HEADER--------------------------------------------------------------.-->
      <?php include  'header.php';?>
      <!--FIM HEADER-----------------------------------------------------------.-->

<!-- CARDS-----------------------------------------------------------------------------------------------.-->
    <br>
    <div class="container">
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/cuca-lata.jpg" alt="CUCA">
            <div class="card-body">
              <h5 class="card-title">CUCA LATA - 200 KZ</h5>
              <p class="card-text">Cerveja em lata bem fria, 4.5 graus de álcool</p>               
            </div>
            <a href="carrito.php?id=19&nome=CUCA LATA&preco=200&img=cuca-lata.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/cuca-garrafa.jpg" alt="CUCA">
            <div class="card-body">
              <h5 class="card-title">CUCA GARRAFA - 200 KZ</h5>
              <p class="card-text">Cerveja em garrafa bem fria, 4.5 graus de álcool. Você deve devolver a garrafa vazia.</p>               
            </div>
            <a href="carrito.php?id=20&nome=CUCA GARRAFA&preco=200&img=cuca-garrafa.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/tigra-lata.jpg" alt="TIGRA">
            <div class="card-body">
              <h5 class="card-title">TIGRA LATA - 200 KZ</h5>
              <p class="card-text">Cerveja em lata bem fria, 5 graus de álcool</p>               
            </div>
             <a href="carrito.php?id=21&nome=TIGRA LATA&preco=200&img=tigra-lata.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
        </div>            
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/tigra-garrafa.jpg" alt="TIGRA">
            <div class="card-body">
              <h5 class="card-title">TIGRA GARRAFA - 200 KZ</h5>
              <p class="card-text">Cerveja em garrafa bem fria, 5 graus de álcool. garrafa descartavel não precisa devolver a garrafa vazia.</p>               
            </div>
             <a href="carrito.php?id=22&nome=TIGRA GARRAFA&preco=200&img=tigra-garrafa.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/eka.jpg" alt="EKA">
            <div class="card-body">
              <h5 class="card-title">EKA - 200 KZ</h5>
              <p class="card-text">Cerveja em garrafa bem fria, 5 graus de álcool. Você não precisa devolver a garrafa vazia.</p>               
            </div>
            <a href="carrito.php?id=23&nome=EKA&preco=200&img=eka.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/nocal.jpg" alt="NOCAL">
            <div class="card-body">
              <h5 class="card-title">NOCAL - 200 KZ</h5>
              <p class="card-text">Cerveja em garrafa bem fria, 5 graus de álcool, não precisa devolver a garrafa vazia, por ser descartavel.</p>               
            </div>
            <a href="carrito.php?id=24&nome=NOCAL&preco=200&img=nocal.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
        </div>              
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/ngola.jpg" alt="N´GOLA">
            <div class="card-body">
              <h5 class="card-title">N´GOLA - 200 KZ</h5>
              <p class="card-text">Cerveja em garrafa bem fria, 5 graus de álcool. Você deve devolver a garrafa vazia.</p>               
            </div>
          <a href="carrito.php?id=25&nome=N´GOLA&preco=200&img=ngola.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/ngolap.jpg" alt="N´GOLA">
            <div class="card-body">
              <h5 class="card-title">N´GOLA PEQUENA - 150 KZ</h5>
              <p class="card-text">Cerveja em garrafa, 5 graus de álcool. Você deve devolver a garrafa vazia.</p>               
            </div>
           <a href="carrito.php?id=26&nome=N´GOLA PEQUENA&preco=150&img=ngolap.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/smanoff.jpg" alt="SMANOFF">
            <div class="card-body">
              <h5 class="card-title">SMANOFF - 250 KZ</h5>
              <p class="card-text">Bebida em lata, 5 graus de álcool.</p>               
            </div>
           <a href="carrito.php?id=27&nome=SMANOFF&preco=250&img=smanoff.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
        </div>              
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/finog.jpg" alt="Fino">
            <div class="card-body">
              <h5 class="card-title">FINO GRANDE - 200 KZ</h5>
              <p class="card-text">Fino grande 5 graus de álcool.</p>               
            </div>
           <a href="carrito.php?id=28&nome=FINO GRANDE&preco=200&img=finog.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/finop.jpg" alt="Fino">
            <div class="card-body">
              <h5 class="card-title">FINO PEQUENO - 150 KZ</h5>
              <p class="card-text">Fino pequeno 3.5 graus de álcool.</p>               
            </div>
            <a href="carrito.php?id=29&nome=FINO PEQUENO&preco=150&img=finop.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/eka-lata.jpg" alt="SMANOFF">
            <div class="card-body">
              <h5 class="card-title">EKA LATA O GARRAFA - 250 KZ</h5>
              <p class="card-text">Cerveja bem fria, 5 graus de álcool. Não preciza devolver o vaziliame</p>               
            </div>
            <a href="carrito.php?id=30&nome=EKA LATA&preco=250&img=eka-lata.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div> 
        </div>             
      </section>
      <br>
          
    </div>
<br>
<!-- FIM CARDS-----------------------------------------------------------------------------------------------.-->

<!-- Paginação-----------------------------------------------------------------------------------------------.-->
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-lg justify-content-center">
    <li class="page-item"><a class="page-link" href="index.php">Anterior</a></li>
    <li class="page-item active"><a class="page-link" href="cerveja.php">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="wisky.php">2</a></li>
    <li class="page-item"><a class="page-link" href="vodka.php">3</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">4</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">5</a></li>
    <li class="page-item"><a class="page-link" href="wisky.php">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>