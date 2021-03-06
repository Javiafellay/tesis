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

            <?php

            try {

            require_once('includes/funciones/bd.conexion.php');

              $sql = " SELECT * FROM `categoria_evento` ";
              $resultado = $conn->query($sql);
            } catch (\Exception $e) {
            echo $e->getMessage();
            }
            ?>

          <nav class="menu-programa">
            <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <?php $categoria = $cat['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria) ?>">
              <i class="fa <?php echo $cat['icono']?>" aria-hidden="true"></i> <?php echo $categoria ?>
              <?php  } ?>
           
          </nav>

          <?php

try {

  require_once('includes/funciones/bd.conexion.php');
  $sql = " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`  ";
  $sql .= " FROM `eventos`  ";
  $sql .= " INNER JOIN `categoria_evento`  ";
  $sql .= " ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`  ";
  $sql .= " INNER JOIN `invitados`  ";
  $sql .= " ON `eventos`.`id_inv` = `invitados`.`invitado_id` ";
  $sql .= " AND eventos.id_cat_evento = 1 ";
  $sql .= " ORDER BY `evento_id` LIMIT 2;";
  $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`  ";
  $sql .= " FROM `eventos`  ";
  $sql .= " INNER JOIN `categoria_evento`  ";
  $sql .= " ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`  ";
  $sql .= " INNER JOIN `invitados`  ";
  $sql .= " ON `eventos`.`id_inv` = `invitados`.`invitado_id` ";
  $sql .= " AND eventos.id_cat_evento = 2 ";
  $sql .= " ORDER BY `evento_id` LIMIT 1;";
  $sql .= " SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `icono`, `nombre_invitado`, `apellido_invitado`  ";
  $sql .= " FROM `eventos`  ";
  $sql .= " INNER JOIN `categoria_evento`  ";
  $sql .= " ON `eventos`.`id_cat_evento` = `categoria_evento`.`id_categoria`  ";
  $sql .= " INNER JOIN `invitados`  ";
  $sql .= " ON `eventos`.`id_inv` = `invitados`.`invitado_id` ";
  $sql .= " AND eventos.id_cat_evento = 3 ";
  $sql .= " ORDER BY `evento_id` LIMIT 1;";
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>


<?php $conn->multi_query($sql); ?>

<?php

  do{ 
    $resultado = $conn->store_result();
    $row = $resultado->fetch_all(MYSQLI_ASSOC);?>

    <?php $i = 0; ?>
    <?php foreach($row as $evento): ?>
      <?php if($i % 2 == 0) { ?>
      <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
      <?php } ?>
      <div class="detalle-evento">
        <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
        <p> <i class="fas fa-clock"></i> <?php echo $evento['hora_evento']; ?></p>
        <p><i class="fas fa-calendar"></i><?php echo $evento['fecha_evento']; ?></p>
        <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'];; ?></p>
      </div>
    </div>
      <?php if($i % 2 == 1) : ?>
        <a href="invitados.php" class="button float-right">Ver Todos</a>
    </div><!--Talleres-->
    <?php endif; ?>
    <?php $i++; ?>
    <?php endforeach; ?>
    <?php $resultado->free(); ?>
 <?php } while ($conn->more_results() && $conn->next_result());

?>



        </div><!--Programa Evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--progama-->

  <?php include_once 'includes/templates/invitados.php'; ?>

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