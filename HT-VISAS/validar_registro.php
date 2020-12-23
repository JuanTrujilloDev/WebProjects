<?php if(isset($_POST['submit'])):
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    $kits = $_POST['kits'];
    $formulario = $_POST['pedido_form'];
    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($kits, $formulario); 
       $eventos = $_POST['registro']; 
       $registro = eventos_json($eventos);    
    try{
        require_once('includes/funciones/db_connection.php');
        $stmt =  $conn->prepare("INSERT INTO clientes (nombre_cliente , apellido_cliente , email_cliente, fecha_cliente, kits_articulos, asesorias_registradas, total_pagado) VALUES(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $nombre, $apellido, $email, $fecha, $pedido, $registro, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: validar_registro.php?exitoso=1');
    }catch (\Exception $e){
        echo $e->getMessage();
    }
    ?>
<?php endif; ?>
<?php include_once 'includes/templates/header.php';?>
<section class="seccion contenedor">
<h2>Resumen de registro</h2>
<?php if(isset($_GET['exitoso'])): 
      if($_GET['exitoso'] == "1"):
        echo "<h3 style=text-align:center;>";
         echo "¡REGISTRO EXITOSO!";
         echo "</br>";
         echo "</br>";
         echo "En unos instantes uno de nuestros asesores se contactara contigo via email. ¡Gracias por preferir a <b>HT-VISAS<b>!";
         echo "</h3>";
         echo "<p style= text-align:center;>";
         echo "Cualquier pregunta o inquietud no dudes en escribirnos a nuestro correo: htvisas@gmail.com";
         echo "</p>";
      endif;
 endif;?>



</section>
<?php include_once 'includes/templates/footer.php';?>