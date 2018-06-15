<?php include_once'template/header.php'?>

  <section id="intro" class="intro_contacto">
    <div class="intro-text">
      <img class="img-fluid" src="/img/bevisalogo.png" alt="logo"></img>
      <h1>Contacto</h1>
      <p>Dejanos un Mensaje</p>
    </div>
  </section>

  <main id="main">
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">


          <div class="col-md-12">
            <div class="contact-about text-center">
              <h3>Bevisa</h3>
              <p>Somos la mejor opción en productos para la industria alimenticia </p>
            </div>
          </div>
          <div class="col-md-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15054.113099889732!2d-99.0523327!3d19.3895679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x754ecdc23855aaf3!2sBevisa%2C+S+de+RL+MI!5e0!3m2!1ses-419!2smx!4v1528492431736" width="650" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Privada de las Américas Manzana 6 Lote 27 <br>Iztapalapa, CDMX</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>bevisagaleria@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>59756148</p>
              </div>

              <div>
                <i class="fa fa-whatsapp"></i>
                <p>5559756148</p>
              </div>

            </div>
          </div>


          <div class="col-md-12">
            <div class="contact-about text-center">
              <h3>LLena el Formulario</h3>
              <p>Muy pronto nos contactaremos con usted</p>
            </div>
            <div class=" col-md-12">
              <div class="form">

                <form action="funciones/email.php" method="post" id="enviarmail" name="enviarmail">
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="nombre"  required class="form-control" id="nombre" placeholder="Nombre"/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" class="form-control" required name="email" id="email" placeholder="Email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" required name="asunto" id="asunto" placeholder="Asunto"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="5" required placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" title="Send Message">Enviar</button></div>
                </form>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <?php include_once'template/footer.php'?>
