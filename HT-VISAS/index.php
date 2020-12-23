<?php include_once 'includes/templates/header.php';?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
   <section class="seccion contenedor ">
  <h2>La mejor asesoría de visas americanas online en español</h2>
  <p>
    En HT-Visas nos encargamos de ofrecerte la mejor atención en el proceso de visado de turista y negocios <b>(B1/B2) </b>, con este tipo de visa podrás visitar Estados Unidos por un lapso máximo de 90 días.  Además si tu visa fue negada
    anteriormente no te preocupes con nosotros <b>¡ Tus posibilidades de obtener tu visa y conocer las mejores ciudades de Estados Unidos serán aún mayores!</b> Realiza el proceso de llenado del <b>DS-160 </b>con acompañamiento de nuestros mejores asesores
    y recibe los mejores consejos para la entrevista en la embajada y el proceso de huellas en el consulado.
    <br><br>
  
    Todo esto y más en <b> HT-VISAS</b>.
  </p>
   </section>
   <!--Seccion fin-->
  
   <section class="programa">
     <div class="contenedor_video">
  <video autoplay loop >
    <source src="video/videousa.mp4" type="video/mp4">
      <source src="video/videousa.webm" type="video/webm">
       <source src="video/videousa.ogv" type="video/ogv">
  </video>
  
     </div>
     <!--Cierre contenedor video-->
  <div class="contenido_programa">
  <div class="contenedor">
  <div class="programa_evento">
  <h2>PROGRAMAS DE ASESORÍA</h2>



  <?php
 try {
 require_once('includes/funciones/db_connection.php');
 $sql = "SELECT * FROM `categoria_asesorias` ";
 $resultado = $conn->query($sql);
 } catch (Exception $e) {
 $error = $e->getMessage();
 }
 ?>
 <nav class="menu_programa">
 <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
 <?php $categoria = $cat['cat_asesoria']; ?>
 <a href="#<?php echo strtolower($categoria) ?>">
 <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
 </a>
 <?php } ?>
 </nav>
 <?php
 try {
 require_once('includes/funciones/db_connection.php');
 $sql = "SELECT `asesoria_id`, `nombre_asesoria`, `fecha_asesoria`, `hora_asesoria`, `cat_asesoria`, `asesores_nombre`, `asesores_apellido` ";
 $sql .= "FROM `asesorias` ";
 $sql .= "INNER JOIN `categoria_asesorias` ";
 $sql .= "ON asesorias.id_cat_asesoria=categoria_asesorias.id_categoria ";
 $sql .= "INNER JOIN `asesores` ";
 $sql .= "ON asesorias.id_ases=asesores.asesores_id ";
 $sql .= "AND asesorias.id_cat_asesoria = 1 ";
 $sql .= "ORDER BY `asesoria_id` LIMIT 2;";
 $sql .= "SELECT `asesoria_id`, `nombre_asesoria`, `fecha_asesoria`, `hora_asesoria`, `cat_asesoria`, `asesores_nombre`, `asesores_apellido` ";
 $sql .= "FROM `asesorias` ";
 $sql .= "INNER JOIN `categoria_asesorias` ";
 $sql .= "ON asesorias.id_cat_asesoria=categoria_asesorias.id_categoria ";
 $sql .= "INNER JOIN `asesores` ";
 $sql .= "ON asesorias.id_ases=asesores.asesores_id ";
 $sql .= "AND asesorias.id_cat_asesoria = 2 ";
 $sql .= "ORDER BY `asesoria_id` LIMIT 2;";
 $sql .= "SELECT `asesoria_id`, `nombre_asesoria`, `fecha_asesoria`, `hora_asesoria`, `cat_asesoria`, `asesores_nombre`, `asesores_apellido` ";
 $sql .= "FROM `asesorias` ";
 $sql .= "INNER JOIN `categoria_asesorias` ";
 $sql .= "ON asesorias.id_cat_asesoria=categoria_asesorias.id_categoria ";
 $sql .= "INNER JOIN `asesores` ";
 $sql .= "ON asesorias.id_ases=asesores.asesores_id ";
 $sql .= "AND asesorias.id_cat_asesoria = 3 ";
 $sql .= "ORDER BY `asesoria_id` LIMIT 2;";
 } catch (Exception $e) {
 $error = $e->getMessage();
 }
 ?>
 <?php $conn->multi_query($sql); ?>
 <?php
 do {
 $resultado = $conn->store_result();
 
 
 ?>
 <?php $i = 0; ?>
 <?php while($asesoria = $resultado->fetch_assoc() ): ?>
 <?php
 if($i % 2 == 0) { ?>
 <div id="<?php echo strtolower($asesoria['cat_asesoria']) ?>" class="info_curso ocultar clearfix">
 <?php } ?>
 <div class="detalle_curso">
 <h3><?php echo html_entity_decode($asesoria['nombre_asesoria']) ?></h3>
 <p><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $asesoria['hora_asesoria']; ?></p>
 <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $asesoria['fecha_asesoria']; ?></p>
 <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $asesoria['asesores_nombre'] . " " . $asesoria['asesores_apellido']; ?></p>
 </div>
 <?php if($i % 2 == 1): ?>
 <a href="calendario.php" class="button float-right">Ver todos</a>
 </div> <!--#talleres-->
 <?php endif; ?>
 <?php $i++; ?>
 <?php endwhile; ?>
 <?php $resultado->free(); ?>
 <?php } while ($conn->more_results() && $conn->next_result());?>
 </div> <!--.programa-evento-->
 </div> <!--.contenedor-->
 </div><!--.contenido-programa-->
</section>

<!--.programa-->
 
   <?php include_once 'includes/templates/destinos.php';?>

  <div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen_cursos clearfix">
      <li>
        <p class="numero">0</p>Destinos</li>
        <li><p class="numero">0</p>Tipos de visas</li>
        <li><p class="numero">0</p>Asesores</li>
        <li><p class="numero">0</p>El lugar # en visas</li>
    </ul>
  </div>
  </div>
  
  <section class="precios seccion">
      <h2>PRECIOS ASESORÍAS</h2> 
  <div class="contenedor">
    <ul class="lista_precios clearfix">
      <li>
  
        <div class="tabla_precio">
  <h3>Kit un día</h3>
  <p class="numero">$5</p>
  <ul>
    <li><i class="fas fa-check"></i> Todas las asesorías</li>
    <li><i class="fas fa-check"></i> A cualquier hora</li>
    <li><i class="fas fa-check"></i> Desde tu hogar</li>
  
  </ul>
  <a href="#" class="button hollow">Comprar</a>
  </div>
  
      </li>
      <li>
  
          <div class="tabla_precio">
    <h3>KIT TODOS LOS DíAS</h3>
    <p class="numero">$15</p>
    <ul>
      <li><i class="fas fa-check"></i> Todas las asesorías</li>
      <li><i class="fas fa-check"></i> A cualquier hora</li>
      <li><i class="fas fa-check"></i> Desde tu hogar</li>
    
    </ul>
    <a href="#" class="button">Comprar</a>
    </div>
    
        </li>
        <li>
  
            <div class="tabla_precio">
      <h3>Kit 2 Días</h3>
      <p class="numero">$8</p>
      <ul>
      <li><i class="fas fa-check"></i> Todas las asesorías</li>
      <li><i class="fas fa-check"></i> A cualquier hora</li>
      <li><i class="fas fa-check"></i> Desde tu hogar</li>
      
      </ul>
      <a href="#" class="button hollow">Comprar</a>
      </div>
      
          </li>
    </ul>
  </div>
  </section>
  <!--MAPA-->
  <div id="mapa"class="mapa"></div>
  
  <section class="seccion">
    <h2>TESTIMONIOS</h2>
    <div class="testimonios contenedor clearfix">
    <div class="testimonio">
      <blockquote>
        <p>Con HT-VISAS pude conseguir fácilmente mi visa, ellos resolvieron todas mis dudas al respecto,
          me ayudaron a prepararme para la entrevista y gracias sus asesores conseguí cumplir mi sueño: Conocer Estados Unidos.
        </p>
        <footer class="info_testimonio clearfix">
  <img src="img/testimonio1.jpg" alt="imagen testimonio">
  <cite>Martin Herman Navarro Murgas <span>Estudiante de Ingeniería</span></cite>
        </footer>
      </blockquote>
    </div>
  
  <div class="testimonio">
    <blockquote>
      <p>En mis vacaciones de primavera pude conocer Nueva York y Washington con la ayuda de HT-VISAS. Ellos me ayudaron con el proceso de llenado de la DS-160
        y me quitaron los nervios para la entrevista, les súper recomiendo HT-VISAS.
      </p>
      <footer class="info_testimonio clearfix">
  <img src="img/testimono3.jpg" alt="imagen testimonio">
  <cite>Laura Sarmiento Cardozo <span>Estudiante de Medicina</span></cite>
      </footer>
    </blockquote>
  </div>
  <div class="testimonio">
    <blockquote>
      <p>Gracias a HT-VISAS pude conocer los mejores parques de Orlando y visitar a mis familiares en Estados Unidos,
        el proceso de visado fue rápido y entendible gracias a sus asesorías en linea
      </p>
      <footer class="info_testimonio clearfix">
  <img src="img/testimonio2.jpg" alt="imagen testimonio">
  <cite>Emel Jesus Navarro Murgas <span>Estudiante de Ingenieria</span></cite>
      </footer>
    </blockquote>
  </div>
  </div>
  </section><!--Fin testimonio-->
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Recibe las mejores noticias:</p>
      <h3>HT-VISAS</h3>
      <a href="email.php" target="_blank" class="boton_newsletter button transparente">Registro</a>
    </div><!--Contenido-->
  </div> <!--Newsletter-->

  
  <?php include_once 'includes/templates/footer.php'; ?>