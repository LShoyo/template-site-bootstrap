<?php require_once("./inc/head.php"); ?>
<!-- traz o HEAD-->

<?php require_once("./inc/header.php"); ?>
<!-- traz o HEADER -->
<!-- 
    Require only once from archive
    Can be used in various files the head since it`s used for others as well
    With only one its possible do change the primary file 
    - useful for making number of pages of browser- making it only one use of archive for them

    Calling three files for this one 
--> 

<!-- Cassossel BOOTSTRASP-->
<div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
    <!-- o container ID é usado como target para a listagem dos slides, qndo clicar vai ler o target e 
pra qual slide ele deve ir -->
  <ol class="carousel-indicators">
    <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
    <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
    <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
    <li data-target="#carrosselBootstrap" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\resident1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título 1</h5>
        <p>Descrição 1</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\resident2.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-sm-block">
        <h5>Título 2</h5>
        <p>Descrição 2</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\resident3 2.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título 3</h5>
        <p>Descrição 3</p>
        </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\resident4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Título 4</h5>
        <p>Descrição 4</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<main class="container">
    <section id="catX" class="row">
        <!-- Card Deck -->
        <h2 class="col-12 text-center text-info mt-5 mb-3">Categoria X</h2>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto X1</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto X2</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto X3</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
        </div>
    </section>
    <section id="catY" class="row">
        <!-- Card Deck -->
        <h2 class="col-12 text-center text-info mt-5 mb-3">Categoria Y</h2>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y1</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y2</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="C:\xampp\htdocs\template-site-bootstrap\inc\img\jill2.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Produto Y3</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-info">PROMO</span>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>