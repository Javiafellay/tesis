<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>El mejor Lugar para Reservar tus seminarios en PY</h2>
    <p>No es necesario que te muevas de donde estés!. Te facilitamos la vida con Tus Eventos PY. Todo lo que buscas lo encontrás aquí</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="bg-talleres.jpg" muted>
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--Contenedor-video-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
            <a href="#conferencias"><i class="fas fa-comments"></i> Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p> <i class="fas fa-clock"></i>16:00hs</p>
              <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fas fa-user"></i>Juan Pablo de la Torre</p>
            </div>
          </div>

            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p> <i class="fas fa-clock"></i>20:00hs</p>
              <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fas fa-user"></i>Juan Pablo de la Torre</p>
            </div>
            <a href="#" class="button float-right">Ver Todos</a>
          </div><!--Talleres-->

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser Freelance</h3>
              <p> <i class="fas fa-clock"></i>19:00hs</p>
              <p><i class="fas fa-calendar"></i>11 de Diciembre</p>
              <p><i class="fas fa-user"></i>Rosa Melchoto</p>
            </div>
          </div>

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Desarrollo UX/UI</h3>
              <p> <i class="fas fa-clock"></i>20:00hs</p>
              <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fas fa-user"></i>Stella Prieto</p>
            </div>
            <a href="#" class="button float-right">Ver Todos</a>
          </div><!--Talleres-->

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Pierde el Miedo a Programar</h3>
              <p> <i class="fas fa-clock"></i>16:00hs</p>
              <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fas fa-user"></i>Germán Mereles</p>
            </div>
          </div>

          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Tecnologias del Futuro</h3>
              <p> <i class="fas fa-clock"></i>20:00hs</p>
              <p><i class="fas fa-calendar"></i>10 de Diciembre</p>
              <p><i class="fas fa-user"></i>Martin Campuzano</p>
            </div>
            <a href="#" class="button float-right">Ver Todos</a>
          </div><!--Talleres-->

        </div><!--Programa Evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--progama-->

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado">
          <p>Richard Roman</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado">
          <p>Lola Meraz</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado">
          <p>Rosa Melano</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado">
          <p>German Mereles</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado">
          <p>Carlos Sosa</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado">
          <p>Julian Rolón</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">6</p>Invitados</li>
        <li><p class="numero">15</p>Talleres</li>
        <li><p class="numero">12</p>Dias</li>
        <li><p class="numero">9</p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por Día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los Días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 Días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Hola Soy Oswaldo personalmente e tomado los seminarios web y están excelentes didacticos, mucha diversión y por supuesto se aprende un montón</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Ecobedo<span>Diseñador en @Mambo</span></cite>
        </footer>
      </blockquote>
    </div><!--Testimonial-->

    <div class="testimonial">
      <blockquote>
        <p>Hola Soy Oswaldo personalmente e tomado los seminarios web y están excelentes didacticos, mucha diversión y por supuesto se aprende un montón</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Ecobedo<span>Diseñador en @Mambo</span></cite>
        </footer>
      </blockquote>
    </div><!--Testimonial-->

    <div class="testimonial">
      <blockquote>
        <p>Hola Soy Oswaldo personalmente e tomado los seminarios web y están excelentes didacticos, mucha diversión y por supuesto se aprende un montón</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Ecobedo<span>Diseñador en @Mambo</span></cite>
        </footer>
      </blockquote>
    </div><!--Testimonial-->
  </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al Newsletter:</p>
      <h3>Tus Eventos Paraguay</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div><!--newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p class="numero">80</p>Días</li>
        <li><p class="numero">15</p>horas</li>
        <li><p class="numero">5</p>minutos</li>
        <li><p class="numero">30</p>segundos</li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>