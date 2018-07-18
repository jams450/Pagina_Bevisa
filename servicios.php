<?php include_once'template/header.php'?>

<section id="intro" class="intro_servicios ">
  <div class="intro-text">
    <img src="/img/bevisalogo_blanco.png" class="logo-bevisa"  alt="logo"></img>
    <p>Somos la mejor opción en productos para la industria alimenticia</p>
  </div>
</section>

<main id=main>

  <section id="team">
    <div class="container">
      <div class="section-header">
        <h3 class="section-title">Nuestros Servicios</h3>
        <span class="section-divider"></span>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/servicios/desarrollo1.jpg" alt=""></div>
            <h4>Desarrollo de productos</h4>
            <br>
            <button type="button" onclick="quitar('#desarrollo');" name="button" class="btn btn-secondary">Ver más</button>
            <br>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/servicios/analisis.jpg" alt=""></div>
            <h4>Analisis</h4>
            <br>
            <button type="button" onclick="quitar('#analisis');" name="button" class="btn btn-secondary">Ver más</button>
            <br>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="img/servicios/index_recetas.jpg" alt=""></div>
            <h4>Servicio 3</h4>
            <br>
            <button type="button" onclick="quitar('#otro');" name="button" class="btn btn-secondary">Ver más</button>
            <br>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="advanced-features" class="section">
    <div class="container">

      <div id="desarrollo" class="col-md-12 serv">
        <h1>Desarrollo de productos</h1>
        <h3>Te ofrecemos productos especialmente hechos para ti, adecuandonos a tus nececidades.</h3>
        <div class="row">
          <div class="col-md-6 text-justify">
            <p>Aplicamos una Metodología de trabajo en la que incorporamos todas las posibles variables a tener en cuenta en este  proceso creativo y que nos permita transformar la idea de producto en una Realidad Tecnológica.</p>
          </div>
          <div class="col-md-6 text-justify">
            <p>Se realiza conjuntamente con el Cliente, con un análisis de las tendencias del mercado, este análisis nos ayuda a diseñar y acotar con mayores garantías de éxito, las principales características que debe tener dicho producto, de los ingredientes a emplear, empaque, precio etc.</p>
          </div>
        </div>
      </div>

      <div id="analisis" class="col-md-12 serv d-none">
        <h1>Analisis</h1>
        <h3>XXXXXXXxxx</h3>
        <div class="row">
          <div class="col-md-6">
            <h2>Aplicación</h2>
            <p>Adición directa tanto a gelatinas como a postres y repostería</p>
          </div>
          <div class="col-md-6">
            <h2>Niveles de Uso</h2>
            <p>La dosis recomendada para este producto es al 1% ( 1 gr en 100 ml), sin embargo la dosis puede variar dependiendo la naturaleza del producto que se desea elaborar.</p>
          </div>
        </div>
      </div>

      <div id="otro" class="col-md-12 serv  d-none">
        <h1>Especialidades</h1>
        <h3>Mezcla de coloides  y colores que por calentamiento con agua y otros componentes líquidos forman una solución coloidal que al enfriar produce una masa semi fluida</h3>
        <div class="row">
          <div class="col-md-6">
            <h2>Aplicación</h2>
            <p>Adición directa tanto a gelatinas como a postres y repostería</p>
          </div>
          <div class="col-md-6">
            <h2>Niveles de Uso</h2>
            <p>La dosis recomendada para este producto es al 1% ( 1 gr en 100 ml), sin embargo la dosis puede variar dependiendo la naturaleza del producto que se desea elaborar.</p>
          </div>
        </div>
      </div>

  </div>
    </div>
  </section>

</main>

<?php include_once'template/footer.php'?>
