<?php include_once 'includes/templates/header.php';?>
   <section class="seccion contenedor">
<h2>Registro de Usuarios</h2>
<form id="registro" class="registro" action="pagar.php" method="post">
<div id="datos_usuario" class="registro caja clearfix">
<div class="campo">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
</div> 
<div class="campo">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
    </div>   
    <div class="campo">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Tu email">
        </div>
    <div id="error"></div>  
</div> <!--Fin datos usuario-->
<!--Inicio paquetes-->
<div id="paquetes" class="paquetes">
<h3>Elige tu kit</h3>
<ul class="lista_precios clearfix">
        <li>
    
          <div class="tabla_precio">
    <h3>Kit un día (Lunes)</h3>
    <p class="numero">$5</p>
    <ul>
      <li><i class="fas fa-check"></i> Todas las asesorías</li>
      <li><i class="fas fa-check"></i> A cualquier hora</li>
      <li><i class="fas fa-check"></i> Desde tu hogar</li>
    
    </ul>
    <div class="orden">
        <label for="kit_dia">Numero de personas:</label>
        <input type="number" min="0" max="100" id="kit_dia" size="3" name="kits[un_dia][cantidad]" placeholder="0">
        <input type="hidden" value="5" name="kits[un_dia][precio]">
    </div>
    </div>
    
        </li>
        <li>
    
            <div class="tabla_precio">
      <h3>KIT TODOS LOS DíAS</h3>
      <p class="numero">$15</p>
      <ul>
        <li><i class="fas fa-check"></i> Todas las asesorías</li>
        <li><i class="fas fa-check"></i> A cualquier hora</li>
        <li><i class="fas fa-check"></i> Desde su hogar</li>
      
      </ul>
      <div class="orden">
            <label for="kit_semanal">Numero de personas:</label>
            <input type="number" min="0" max="100" id="kit_semanal" size="3" name="kits[semanal][cantidad]" placeholder="0">
        <input type="hidden" value="15" name="kits[semanal][precio]">
        </div>
      </div>
      
          </li>
          <li>
    
              <div class="tabla_precio">
        <h3>Kit 2 Días (Lunes y Martes)</h3>
        <p class="numero">$8</p>
        <ul>
        <li><i class="fas fa-check"></i> Todas las asesorías</li>
        <li><i class="fas fa-check"></i> A cualquier hora</li>
        <li><i class="fas fa-check"></i> Desde tu hogar</li>
        
        </ul>
        <div class="orden">
                <label for="kit_2dias">Numero de personas:</label>
                <input type="number" min="0" max="100" id="kit_2dias" size="3" name="kits[2dias][cantidad]" placeholder="0">
        <input type="hidden" value="8" name="kits[2dias][precio]">
            </div>
        </div>
        
            </li>
      </ul>
      
</div><!--Paquetes-->
<div id="asesorias" class="asesorias clearfix">
        <h3>Elige tus asesorias</h3>
        <div class="caja">
              <div id="Lunes" class="contenido_dia clearfix">
                  <h4>Lunes</h4>
                      <div>
                          <p>Dudas e inquietudes:</p>
                          <label><input type="checkbox" name="registro[]" id="dudas_01" value="dudas_01"><time>10:00</time> Aclaracion de dudas e inquietudes</label>
                          <label><input type="checkbox" name="registro[]" id="dudas_02" value="dudas_02"><time>12:00</time> Aclaracion de dudas e inquietudes</label>
                          <label><input type="checkbox" name="registro[]" id="dudas_03" value="dudas_03"><time>14:00</time> Aclaracion de dudas e inquietudes</label>
                          <label><input type="checkbox" name="registro[]" id="dudas_04" value="dudas_04"><time>17:00</time> Aclaracion de dudas e inquietudes</label>
                          <label><input type="checkbox" name="registro[]" id="dudas_05" value="dudas_05"><time>19:00</time> Aclaracion de dudas e inquietudes</label>
                      </div>
                      <div>
                          <p>Llenado formulario:</p>
                          <label><input type="checkbox" name="registro[]" id="form_01" value="form_01"><time>10:00</time> Ayuda llenado de formulario</label>
                          <label><input type="checkbox" name="registro[]" id="form_02" value="form_02"><time>17:00</time> Ayuda llenado de formulario</label>
                          <label><input type="checkbox" name="registro[]" id="form_03" value="form_03"><time>19:00</time> Ayuda llenado de formulario</label>
                      </div>
                      <div>
                          <p>Preparacion entrevista:</p>
                          <label><input type="checkbox" name="registro[]" id="entrv_01" value="entrv_01"><time>10:00</time> Preparación entrevista</label>
                      </div>
              </div> <!--#Lunes-->
              <div id="Martes" class="contenido_dia clearfix">
                  <h4>Martes</h4>
                  <div>
                        <p>Dudas e inquietudes:</p>
                        <label><input type="checkbox" name="registro[]" id="dudas_06" value="dudas_06"><time>10:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_07" value="dudas_07"><time>12:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_08" value="dudas_08"><time>14:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_09" value="dudas_09"><time>17:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_10" value="dudas_10"><time>19:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_11" value="dudas_11"><time>21:00</time> Aclaracion de dudas e inquietudes</label>
                  </div>
                  <div>
                        <p>Llenado formulario:</p>
                        <label><input type="checkbox" name="registro[]" id="form_04" value="form_04"><time>10:00</time> Ayuda llenado de formulario</label>
                        <label><input type="checkbox" name="registro[]" id="form_05" value="form_05"><time>17:00</time> Ayuda llenado de formularioraba</label>
                        <label><input type="checkbox" name="registro[]" id="form_06" value="form_06"><time>19:00</time> Ayuda llenado de formulario</label>
                  </div>
                  <div>
                        <p>Preparacion entrevista:</p>
                        <label><input type="checkbox" name="registro[]" id="entrv_02" value="entrv_02"><time>10:00</time> Preparación entrevista</label>
                        <label><input type="checkbox" name="registro[]" id="entrv_03" value="entrv_03"><time>17:00</time> Preparación entrevista</label>
                  </div>
              </div> <!--#Martes-->
              <div id="Miercoles" class="contenido_dia clearfix">
                  <h4>Miercoles</h4>
                  <div>
                        <p>Dudas e inquietudes:</p>
                        <label><input type="checkbox" name="registro[]" id="dudas_12" value="dudas_12"><time>10:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_13" value="dudas_13"><time>12:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_14" value="dudas_14"><time>14:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_15" value="dudas_15"><time>17:00</time> Aclaracion de dudas e inquietudes</label>
                        <label><input type="checkbox" name="registro[]" id="dudas_16" value="dudas_16"><time>19:00</time> Aclaracion de dudas e inquietudes</label>
                  </div>        
                  <div>
                        <p>Llenado formulario:</p>
                        <label><input type="checkbox" name="registro[]" id="form_07" value="form_07"><time>10:00</time> Ayuda llenado de formulario</label>
                        <label><input type="checkbox" name="registro[]" id="form_08" value="form_08"><time>17:00</time> Ayuda llenado de formulario</label>
                        <label><input type="checkbox" name="registro[]" id="form_09" value="form_09"><time>19:00</time> Ayuda llenado de formulario</label>
                 </div>           
                 <div>        
                     <p>Preparacion entrevista:</p>
                        <label><input type="checkbox" name="registro[]" id="entrv_04" value="entrv_04"><time>14:00</time> Preparacion entrevisa</label>
                        <label><input type="checkbox" name="registro[]" id="entrv_05" value="entrv_05"><time>17:00</time> Preparacion entrevisa</label>
                  </div>
              </div> <!--#Miercoles-->
          </div><!--.caja-->
    </div> <!--#eventos-->
    <div id="resumen" class="resumen clearfix">
<h3>PAGO Y EXTRAS</h3>
<div class="caja clearfix">
    <div class="extras">
        <div class="orden">
            <label for="llenado_form">Llenado de formulario por persona 7$</label>
            <input type="number" min="0" id="llenado_form" name="pedido_extra[formulario][cantidad]" size="3" placeholder="0">
            <input type="hidden" value="7" name="pedido_extra[formulario][precio]">
        </div> <!--Orden-->

        <input id="calcular" type="button"  class="button" value="calcular">
    </div><!--Extas-->

    <div class="total">
        <p>Resumen:</p>
        <div id="lista_productos">

        </div>
        <p>Total:</p>
        <div id="suma_total">

        </div>
        <input type="hidden" name="total_pedido" id="total_pedido">
        <input id="btnRegistro" type="submit" name="submit" class="button" value="pagar">
    </div><!--Total-->
</div><!--Caja-->
    </div><!--resumen-->
</form>
   </section>
   <?php include_once 'includes/templates/footer.php';?>