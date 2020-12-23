<?php include_once 'includes/templates/header.php';?>

   <section class="seccion contenedor">
<h2>Calendario de citas</h2>

<?php
try{
    require_once('includes/funciones/db_connection.php');
    $sql = " SELECT asesoria_id, nombre_asesoria, fecha_asesoria, hora_asesoria, cat_asesoria, icono    , asesores_nombre, asesores_apellido ";
    $sql .= " FROM `asesorias` ";
    $sql .= " INNER JOIN `categoria_asesorias` ";
    $sql .= " ON asesorias.id_cat_asesoria = categoria_asesorias.id_categoria ";
    $sql .= " INNER JOIN `asesores` ";
    $sql .= " ON asesorias.id_ases = asesores.asesores_id ";
    $sql .= " ORDER BY `asesoria_id` ";   
    $resultado = $conn->query($sql);
}catch (\Exception $e){
    echo $e->getMessage();
}
?>

<div class="calendario contenedor">
<?php
$calendario = array();
    while($asesorias = $resultado->fetch_assoc()) {
        //obtiene la fecha de la asesoria

        $fecha= $asesorias['fecha_asesoria'];
        $asesoria = array(
            'titulo' => $asesorias['nombre_asesoria'],
            'fecha'  => $asesorias['fecha_asesoria'],
            'hora'  => $asesorias['hora_asesoria'],
            'categoria' => $asesorias['cat_asesoria'],
            'icono' => $asesorias['icono'],
            'asesor' => $asesorias['asesores_nombre'] . " " . $asesorias['asesores_apellido']
        );
        $calendario[$fecha][]= $asesoria;
        
        
        ?>

   <?php  }  //While de fetch_assoc ?>

   <?php
    //Imprime todos los asesorias
    foreach($calendario as $dia => $lista_asesorias){?>
<h3 class="dia">
<i class="fa fa-calendar"></i>
<?php echo $dia; ?>
</h3>
<?php foreach($lista_asesorias as $asesoria){?>
<div class="dia">
<p class="titulo"> <?php echo $asesoria['titulo']; ?></p>
<p class="hora">
<i class="fa fa-clock o" aria-hidden="true"></i> 
<?php echo $asesoria['fecha']. " " . $asesoria['hora']; ?>
</p>

<p> <i class="fa <?php echo $asesoria['icono']?>" aria-hidden="true"></i> <?php echo $asesoria['categoria']; ?></p>
<p> 
<i class="fa fa-user" aria-hidden="true"></i> 
<?php echo $asesoria['asesor']; ?></p>
</p>
</div>
<?php } //fin for each asesorias?>
    <?php } //fin for each dias?>

</div>
<?php
    $conn->close();
    ?>

   </section>
   <?php include_once 'includes/templates/footer.php';?>    