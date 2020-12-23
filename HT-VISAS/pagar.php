<?php 

 if(!isset($_POST['submit'])) {
   exit("hubo un error");
 }
 
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;


require 'includes/paypal.php';



if(isset($_POST['submit'])):
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    //pedidos
    $kits = $_POST['kits'];
    $numero_kits = $kits;

    $formulario = $_POST['pedido_extra']['formulario']['cantidad'];
    $precioFormulario = $_POST['pedido_extra']['formulario']['precio'];

    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($kits, $formulario); 
       $eventos = $_POST['registro']; 
       $registro = eventos_json($eventos);   

endif;
  
    try{
        require_once('includes/funciones/db_connection.php');
        $stmt =  $conn->prepare("INSERT INTO clientes (nombre_cliente , apellido_cliente , email_cliente, fecha_cliente, kits_articulos, asesorias_registradas, total_pagado) VALUES(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $nombre, $apellido, $email, $fecha, $pedido, $registro, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        //header('Location: validar_registro.php?exitoso=1');
    }catch (\Exception $e){
        echo $e->getMessage();
    }
  
$compra = new Payer();
$compra->setPaymentMethod('paypal');


$articulo = new Item();
$articulo->setName($producto)
      ->setCurrency('USD')
      ->setQuantity(1)
      ->setPrice($precio);
      $i=0;
foreach($numero_kits as $key => $value){
  if( (int) $value['cantidad'] > 0 ){
   
   ${'articulos$i'} = new Item();
   ${'articulos$i'}->setName('Kit: ' . $key)
                   ->setCurrency('USD')
                   ->setQuantity( (int) $value['cantidad'] )
                   ->setPrice( (int) $value['precio'] );
    $i++;
  }
}   
 
/*    
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));
  
$detalles = new Details();
$detalles->setShipping($envio)
          ->setSubtotal($precio); 
          
          
$cantidad = new Amount();
$cantidad->setCurrency('USD')
          ->setTotal($total)
          ->setDetails($detalles);
          
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago ')
               ->setInvoiceNumber(uniqid());
               

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true")
              ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false");
              
              
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));
     
     try {
       $pago->create($apiContext);
     } catch (PayPal\Exception\PayPalConnectionException $pce) {
       // Don't spit out errors or use "exit" like this in production code
       echo '<pre>';print_r(json_decode($pce->getData()));exit;
   }

$aprobado = $pago->getApprovalLink();


header("Location: {$aprobado}");

*/