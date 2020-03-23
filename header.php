     <!--Empresa presentacao-->
       <section id="cover">
          <div id="cover-texto">
              <div class="container">
                <div class="row">
                    <div class="col-sm-12 prova">
                      <h1 class="h1 text-uppercase"><strong>Casa de hambúrguer José F. Mateus </strong> </h1>
                      <h2 class="h2"><em><strong>Trabalhando duro para sua satisfação</strong> </em></h2>
                      <h5 class="h5"><strong>Você pode realizar a sua inscrição aqui, enviamos-lhe as nossas novidades dos produtos e serviços em pouco tempo.</strong></h5>                    
                    </div>
                  </div>
                </div>            
                
            </div>
       </section>   
     <!-- Fin Empresa presentacao------------------------------------------------------------------------- -->
     <!-- Menu de navegação.-->
     
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="carrito.php#ancla">
          <img src="img/carrito.png" width="30" height="30" class="d-inline-block align-top" alt="">           
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" id="lista">
            <li class="nav-item active">
              <a class="nav-link" href="index.php#carousel">Inicio</a>
            </li>            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="cerveja.php#carousel">Cerveja</a>
                <a class="dropdown-item" href="wisky.php#carousel">Wisky</a>
                <a class="dropdown-item" href="vodka.php#carousel">Vodka</a>
                <a class="dropdown-item" href="refrigerante.php#carousel">Refrigerantes</a>
                <a class="dropdown-item" href="cartoes.php#carousel">Cartões de saldo</a>  
                <a class="dropdown-item" href="maisvendido.php#carousel">Produtos mais vendidos</a>
                <a class="dropdown-item" href="melhorcliente.php#carousel">Melhores Clientes</a>
              </div>
            </li>
            <?php        
              if (isset($_SESSION['Usuario'])) {
                  ?>
                  <li class="nav-item dropdown" id="admin">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administrador
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="pedido.php#carousel">Ver pedidos recentes</a>                    
                    <a class="dropdown-item" href="trocarsenha.php#carousel">Trocar palavra passe</a> 
                    <a class="dropdown-item" href="#carousel" id="fecharsessao">Encerrar sessão</a>                             
                  </div>
                </li>

                  <?php 
                  }    
            ?>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <label class="sr-only" for="inlineFormInputName2">Usuario</label>
              <input type="text" name="usuario" value="" id="usuario" class="form-control mb-2 mr-sm-2 form-control-sm" id="inlineFormInputName2" placeholder="Usuario" required>
            <label class="sr-only" for="inlineFormInputGroupUsername2">palavra passe</label>
            <div class="input-group mb-2 mr-sm-2">
              <input type="password" value="" id = "senha" name="palavra passe" class="form-control form-control-sm" id="inlineFormInputGroupUsername2" placeholder="palavra passe" required>
            </div>
            <label class="sr-only" for="inlineFormInputGroupUsername2">Aceitar</label>
            <div class="input-group mb-2 mr-sm-2">
              <button type="button" id="aceitaruser" class="btn btn-outline-primary btn-sm">Aceitar</button>
            </div>
          </form>
        </div>
      </nav>
    <!--Fim Menu de Menu de navegação-----------------------------------------------------------------------------------------------.-->

    <!--Carrossel de imagens-->
      <section id="carousel">
        <div id="carousel-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
            <li data-target="#carousel-home" data-slide-to="2"></li>
            <li data-target="#carousel-home" data-slide-to="3"></li>
            <li data-target="#carousel-home" data-slide-to="4"></li>
            <li data-target="#carousel-home" data-slide-to="5"></li>
            <li data-target="#carousel-home" data-slide-to="6"></li>
            <li data-target="#carousel-home" data-slide-to="7"></li>
            <li data-target="#carousel-home" data-slide-to="8"></li>
            <li data-target="#carousel-home" data-slide-to="9"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/cuca.jpg" alt="Cuca Cerveja">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/booster.jpg" alt="Booster">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/hamburguer.jpg" alt="Hamburguer">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/cervejas.jpg" alt="Cervejas">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sumos.jpg" alt="Sumos">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/vinhos.jpg" alt="Vinhos">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/agua.jpg" alt="Água">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/zapunitel.jpg" alt="Zap-Unitel">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/champanhe.jpg" alt="Champanhe">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/cervejas2.jpg" alt="Cervejas">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Seguinte</span>
          </a>
        </div>
      </section>