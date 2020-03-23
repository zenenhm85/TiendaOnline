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
    <title>José F. Mateus - Wiskys</title>
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
            <img class="card-img-top" src="img/cards/jb.jpg" alt="JB">
            <div class="card-body">
              <h5 class="card-title">JB - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=10&nome=JB&preco=500&img=jb.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/wh.jpg" alt="White Horse">
            <div class="card-body">
              <h5 class="card-title">WHITE HORSE - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=11&nome=WHITE HORSE&preco=500&img=wh.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/rl.jpg" alt="Red Label">
            <div class="card-body">
              <h5 class="card-title">RED LABEL - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=12&nome=RED LABEL&preco=500&img=rl.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
        </div>          
      </section>
      <br>
       <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/constantino.jpg" alt="Constantino">
            <div class="card-body">
              <h5 class="card-title">CONSTANTINO - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
             <a href="carrito.php?id=13&nome=CONSTANTINO&preco=500&img=constantino.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/ballantines.jpg" alt="BALLANTINES">
            <div class="card-body">
              <h5 class="card-title">BALLANTINES - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=14&nome=BALLANTINES&preco=500&img=ballantines.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/passport.jpg" alt="PASSPORT.jpg">
            <div class="card-body">
              <h5 class="card-title">PASSPORT SCOTCH - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=15&nome=PASSPORT SCOTCH&preco=500&img=passport.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>  
        </div>        
      </section>
      <br>
      <section>
        <div class="card-deck">
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/mch.jpg" alt="Monkey Shoulder">
            <div class="card-body">
              <h5 class="card-title">MONKEY SHOULDER - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=16&nome=MONKEY SHOULDER&preco=500&img=mch.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="img/cards/lhb.jpg" alt="White Horse">
            <div class="card-body">
              <h5 class="card-title">LOGAN HERITAGE BLEND - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
            <a href="carrito.php?id=17&nome=LOGAN HERITAGE BLEND&preco=500&img=lhb.jpg#ancla" class="btn btn-primary compra">Comprar</a>
          </div>
           <div class="card text-center">
            <img class="card-img-top" src="img/cards/gf.jpg" alt="GLENFIDDICH.jpg">
            <div class="card-body">
              <h5 class="card-title">GLENFIDDICH - 500 KZ</h5>
              <p class="card-text">Este preço é por calice</p>               
            </div>
             <a href="carrito.php?id=18&nome=GLENFIDDICH&preco=500&img=gf.jpg#ancla" class="btn btn-primary compra">Comprar</a>
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
    <li class="page-item"><a class="page-link" href="cerveja.php">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cerveja.php">1</a></li>
    <li class="page-item active"><a class="page-link" href="wisky.php">2 <span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="vodka.php">3</a></li>
    <li class="page-item"><a class="page-link" href="refrigerante.php">4</a></li>
    <li class="page-item"><a class="page-link" href="cartoes.php">5</a></li>
    <li class="page-item"><a class="page-link" href="vodka.php">Seguinte</a></li>
  </ul>
</nav>

<!-- Fim Paginação-----------------------------------------------------------------------------------------------.-->
<!-- FOOTER-----------------------------------------------------------------------------------------------.-->
    <?php include 'footer.php';?>  
<!-- FIM FOOTER-----------------------------------------------------------------------------------------------.-->     
   </body>
</html>