<?php include_once'template/header.php'?>

<section id="intro" class="intro_galeria">
  <div class="intro-text">
    <img src="/img/bevisalogo.png" alt="logo"></img>
    <p>Elige el sabor de tu dia</p>
  </div>
  <div class="product-screens">

    <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
      <img height="450px" src="img/saborizante1.png" alt="">
    </div>

    <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
      <img height="450px" src="img/saborizante2.png" alt="">
    </div>

    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img  height="450px" src="img/saborizante3.png" alt="">
    </div>

  </div>
</section>

<main id="main">

<section id="pricing" class="section">
  <div class="container">
    <div class="section-header">
      <h3 class="section-title">Gama de Productos</h3>
      <span class="section-divider"></span>
      <p class="section-description">Elige el sabor de tu día</p>
    </div>
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="box featured wow fadeInLeft">
          <h3>Jarabes</h3>
          <img width="100px" height="200px" src="/img/jarabes.png"></img>
          <ul>
            <li><i class="fa fa-coffee"></i> Bebidas Calientes</li>
            <li><i class="fa fa-coffee"></i> Bebidas Frías</li>
            <li><i class="fa fa-coffee"></i> Coctelería</li>
          </ul>
          <a href="#jarabes" class="get-started-btn">Ver más</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="box featured wow fadeInUp">
          <h3>Bases</h3>
          <img width="230px" height="198px" src="/img/bases.png"></img>
          <ul>
            <li><i class="ion-beaker"></i> Frapes</li>
            <li><i class="ion-beaker"></i> Smoothies</li>
            <li><i class="ion-beaker"></i> Bebidas Calientes</li>
          </ul>
          <a href="#bases" class="get-started-btn">Ver más</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="box featured wow fadeInRight">
          <h3>Pulpas</h3>
          <img width="230px" height="198px" src="/img/pulpas.png"></img>
          <ul>
            <li><i class="ion-beaker"></i> Smoothies</li>
            <li><i class="ion-beaker"></i> Agua de sabor</li>
            <li><i class="ion-beaker"></i> Chamoyadas</li>
          </ul>
          <a href="#pulpas" class="get-started-btn">Ver más</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="jarabes" class="section-bg">
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-4">
          <div class="section-header wow fadeIn" data-wow-duration="1s">
            <h3 class="section-title">Jarabes</h3>
            <span class="section-divider"></span>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 features-img">
          <img src="img/jarabe.png" height="450px" alt="" class="wow fadeInLeft">
        </div>

        <div class="col-lg-8 col-md-7 ">

          <div class="row">

            <div class="col-lg-6 col-md-6 box wow fadeInRight">
              <div class="icon"><i class="fas fa-fire"></i></div>
              <h4 class="title">Bebidas Calientes</h4>
              <p class="description">El mejor acompañante para tus capuchinos y lattes.</p>
              <button type="button" class="btn  btn-primary " data-toggle="modal" data-target="#saborescalientes_jarabes">
                Ver sabores
              </button>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
              <div class="icon"><i class="fa fa-snowflake"></i></div>
              <h4 class="title">Bebidas Frias</h4>
              <p class="description">Refrescate con nuestros inigualables sabores</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#saboresfrios_jarabes">
                Ver sabores
              </button>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-wine-glass"></i></div>
              <h4 class="title">Coctelería</h4>
              <p class="description">Disfruta de sabores hechos especialmente para ti.</p><br>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cocteleria_jarabes">
                Ver sabores
              </button>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="fas fa-list-ol"></i></div>
              <h4 class="title">Tabla de dosificación</h4>
              <p class="description">Utilizando nuestros productos te garantizamos una dosificación menor, logrando un ahorro a tu bolsillo.</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dosificacion_jarabes">
                Ver sabores
              </button>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>
</section>

<section id="bases">
  <section id="features">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 ">
        <div class="section-header wow fadeIn" data-wow-duration="1s">
          <h3 class="section-title">Bases</h3>
          <span class="section-divider"></span>
        </div>
      </div>

      <div class="col-lg-8 col-md-7 ">
        <div class="row">

          <div class="col-lg-6 col-md-6 box wow fadeInLeft">
            <div class="icon"><i class="fa fa-snowflake"></i></div>
            <h4 class="title">Frappes</h4>
            <p class="description">Atrévete a disfrutar los mejores sabores.</p>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frappes_bases">
              Ver sabores
            </button>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInLeft" data-wow-delay="0.1s">
            <div class="icon"><i class="ion-beaker"></i></div>
            <h4 class="title">Smoothies</h4>
            <p class="description">Dale consistencia a tus bebidas </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smoothies_bases">
              Ver sabores
            </button>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icon"><i class="fas fa-fire"></i></div>
            <h4 class="title">Bebidas Calientes</h4>
            <p class="description">Para esos días de frío.</p>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calientes_bases">
              Ver sabores
            </button>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInLeft" data-wow-delay="0.3s">
            <div class="icon"><i class="fas fa-list-ol"></i></div>
            <h4 class="title">Tabla de dosificación</h4>
            <p class="description">Utilizando la cantidad exacta de nuestro producto, lograras conquistar tu paladar</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dosificacion_bases">
              Ver tabla
            </button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-5 features-img">
        <img src="img/base.png" height="450px" class="wow fadeInRight">
      </div>



    </div>

  </div>
  </section>
</section>

<section id="pulpas" class="section-bg">
  <section id="features">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 offset-lg-4">
        <div class="section-header wow fadeIn" data-wow-duration="1s">
          <h3 class="section-title">Pulpas</h3>
          <span class="section-divider"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-5 features-img">
        <img src="img/pulpa.png" height="450px" class="wow fadeInLeft">
      </div>

      <div class="col-lg-8 col-md-7 ">

        <div class="row">

          <div class="col-lg-6 col-md-6 box wow fadeInRight">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Smoothies</a></h4>
            <p class="description">Deleita tu paladar con nuestros sabores frutales</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
            <div class="icon"><i class="ion-ios-flask-outline"></i></div>
            <h4 class="title"><a href="">Chamoyadas</a></h4>
            <p class="description">.</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="ion-social-buffer-outline"></i></div>
            <h4 class="title"><a href="">Agua</a></h4>
            <p class="description">  </p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Tabla de dosificación</a></h4>
            <p class="description"></p>
          </div>
        </div>

      </div>

    </div>

  </div>
  </section>
</section>

</main>

<!-- MODAL Jarabes -->
<div class="modal fade" id="saborescalientes_jarabes" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bebidas Calientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm">
              <ul>
                <li>Almendra</li>
                <li>Almendra-Moka</li>
                <li>Amaretto</li>
                <li>Avellana</li>
                <li>Brandi</li>
                <li>Cajeta</li>
                <li>Canela</li>
                <li>Caramelo</li>
                <li>Cereza</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Chai</li>
                <li>Choco Menta</li>
                <li>Chocolate Blanco</li>
                <li>Chocolate Suizo</li>
                <li>Crema Irlandesa</li>
                <li>Crema de Menta</li>
                <li>Crema de Whisky</li>
                <li>Cofee-Tofi</li>
                <li>Licor de Café</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Mantequilla</li>
                <li>Mazapán</li>
                <li>Moka</li>
                <li>Macadamia</li>
                <li>Pistache</li>
                <li>Rompope</li>
                <li>Vainilla</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="saboresfrios_jarabes" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bebidas Frias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm">
              <ul>
                <li>Algodón de Azúcar</li>
                <li>Arándano</li>
                <li>Cereza</li>
                <li>Cerveza de raíz</li>
                <li>Cherri-Cola</li>
                <li>Chicle</li>
                <li>Coco</li>
                <li>Curacao</li>
                <li>Durazno</li>
                <li>Frambuesa</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Fresa</li>
                <li>Hierbabuena</li>
                <li>Kiwi</li>
                <li>Limón</li>
                <li>Lima</li>
                <li>Lichi</li>
                <li>Mandarina</li>
                <li>Mango</li>
                <li>Manzana Verde </li>
                <li>Maracuyá</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Melon</li>
                <li>Mora Azul</li>
                <li>Menta</li>
                <li>Naranja</li>
                <li>Piña</li>
                <li>Piña Colada</li>
                <li>Plátano</li>
                <li>Pepino</li>
                <li>Sandia</li>
                <li>Uva</li>
                <li>Zarzamora</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cocteleria_jarabes" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Coctelería </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm">
              <ul>
                <li>Brandi</li>
                <li>Licor de café</li>
                <li>Mediterráneo (Malibú)</li>
                <li>Mojito</li>
                <li>Ron</li>
                <li>Rosas</li>
                <li>Tequila</li>
                <li>Violeta</li>
                <li>Arándano</li>
                <li>Durazno</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Frambuesa</li>
                <li>Fresa</li>
                <li>Crema de Menta</li>
                <li>Melón</li>
                <li>Hierbabuena</li>
                <li>Cereza</li>
                <li>Choco Menta</li>
                <li>Chocolate Suizo</li>
                <li>Coco </li>
                <li>Manzana Verde</li>
              </ul>
            </div>
            <div class="col-sm">
              <ul>
                <li>Maracuyá </li>
                <li>Mora Azul</li>
                <li>Menta</li>
                <li>Moka</li>
                <li> Plátano</li>
                <li>Sandia</li>
                <li>Zarzamora</li>
                <li>Kiwi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dosificacion_jarabes" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dosificación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Sabores XXXXXXXXXXX
      </div>
    </div>
  </div>
</div>

<!-- MODAL Bases -->
<div class="modal fade" id="frappes_bases" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Frappes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Sabores XXXXXXXXXXX
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="smoothies_bases" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Smoothies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Sabores XXXXXXXXXXX
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="calientes_bases" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Calientes </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Sabores XXXXXXXXXXX
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dosificacion_bases" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dosificación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Sabores XXXXXXXXXXX
      </div>
    </div>
  </div>
</div>
<!-- MODAL Pulpas -->

<?php include_once'template/footer.php'?>
