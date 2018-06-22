<?php
include_once'template/header.php';
?>

<section id="intro" class="intro_industrial">
  <div class="intro-text">
    <img src="/img/bevisalogo.png" alt="logo"></img>
    <p>Somos la mejor opción en productos para la industria alimenticia</p>
  </div>

</section>

<main class="main">
  <section id="advanced-features" class="section">
    <div class="features-row">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="btn-group-vertical wow fadeInLeft">
                <button type="button"  onclick="esp()" class="btn btn-secondary">Especialidades</button>
                <button type="button" onclick="colgel()" class="btn btn-secondary">Colores en Gel</button>
                <button type="button" onclick="colhidro()" class="btn btn-secondary">Colores Hidrosolubles</button>
                <button type="button" onclick="sabliq()" class="btn btn-secondary">Sabores Liquidos</button>
                <button type="button" onclick="sabpol()" class="btn btn-secondary">Sabores en Polvo</button>
            </div>
          </div>
          <div id="Especialidades" class="col-md-9 hidden ">
            <div class="">
              <h2>Titulo1</h2>
              <h3>Descripcion</h3>
              <p>Choro.</p>
              <p>Choro.</p>
            </div>
          </div>
          <div id="Coloresgel" class="col-md-9 hidden d-none">
            <div class="">
              <h2>Titulo2</h2>
              <h3>Descripcion</h3>
              <p>Choro.</p>
              <p>Choro.</p>
            </div>
          </div>
          <div id="Coloreshidro" class="col-md-9 hidden d-none">
            <div class="">
              <h2>Titulo3</h2>
              <h3>Descripcion</h3>
              <p>Choro.</p>
              <p>Choro.</p>
            </div>
          </div>
          <div id="Saboresliquido" class="col-md-9 hidden d-none">
            <div class="">
              <h2>Titulo4</h2>
              <h3>Descripcion</h3>
              <p>Choro.</p>
              <p>Choro.</p>
            </div>
          </div>
          <div id="Saborespolvo" class="col-md-9 hidden d-none">
            <div class="">
              <h2>Titulo5</h2>
              <h3>Descripcion</h3>
              <p>Choro.</p>
              <p>Choro.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once'template/footer.php'?>
