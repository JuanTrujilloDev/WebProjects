<section class="seccion contenedor">
<h2>Destinos populares</h2>

<?php
try{
    require_once('includes/funciones/db_connection.php');
    $sql = " SELECT * FROM `destinos` ";  
    $resultado = $conn->query($sql);
}catch (\Exception $e){
    echo $e->getMessage();
}
?>

<section class="destinos contenedor section">
  <ul class="lista_destinos clearfix">
<?php while($destinos = $resultado->fetch_assoc()){ ?>
   
  <li>
  <div class="destinos">
  <a class="destino_info" href="#destino<?php echo $destinos['id_destino']; ?>" >
        <img src="img/<?php echo $destinos['url_imagen']; ?>" alt="imagen destino">
         <p><?php echo $destinos['nombre_destino']; ?></p>
  </a>
  
  </div>
  </li>
  <div style="display:none;">
       <div class="destino_info" id="destino<?php echo $destinos['id_destino']; ?>">
          <h2> <?php echo $destinos['nombre_destino']; ?></h2>         
          <img src="img/<?php echo $destinos['url_imagen'] ?>" alt="imagen destino">
         <p><?php echo $destinos['descripcion_destino'] ?></p>
       </div>
  </div>
 
   <?php  }  //While de fetch_assoc ?>
   </ul>
  </section>

<?php
    $conn->close();
    ?>

   </section>