(function(){
    'use strict';

    document.addEventListener('DOMContentLoaded' , function(){

        var mapa = document.querySelector('#mapa');
        if(mapa) {
          //Codigo mapa inicio
          var map = L.map('mapa').setView([2.940373, -75.254273], 19); //Cambiamos el L.map('map') por L.map('mapa') ya que nuestra varoanñe es mapa. Tambien para darle la ubicación del mapa pegamos las coordenadas en este caso serian setView([-33.437057, -70.647860], 15); para monjitas 744. - el número , 15) hace referencia al zoom.
         
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
         
          L.marker([2.940373, -75.254273]).addTo(map) //Cambiamos coordenadas en L.marker([-33.437057, -70.647860]).addTo(map), en este caso -33.437057, -70.647860 = monjitas 744
              .bindPopup('HT-VISAS') //Frase encima del puntero del mapa
              .openPopup()
              /*.bindTooltip('Un Tooltip') //Aparece cuando te situas encima del puntero del mapa
              .openTooltip()*/
         
          //codigo mapa final
        }
        
        //Campos datos usuario
        var nombre= document.getElementById('nombre');
        var apellido= document.getElementById('apellido');
        var email= document.getElementById('email');

        //Campos pases
        var kit_dia= document.getElementById('kit_dia');
        var kit_2dias= document.getElementById('kit_2dias');
        var kit_semanal= document.getElementById('kit_semanal');

        //Botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var resultado = document.getElementById('lista_productos');
        var suma = document.getElementById('suma_total');

        //Extras
        var llenadoformulario = document.getElementById('llenado_form');
        
        botonRegistro.disabled = true;
        
        if(document.getElementById('calcular')){

        

        calcular.addEventListener('click', calcularMontos);

        kit_dia.addEventListener('blur', mostrarDias);
        kit_2dias.addEventListener('blur', mostrarDias);
        kit_semanal.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarEmail);
        function validarCampos (){
            if(nombre.value == ''){
                errorDiv.style.display= 'block';
                errorDiv.innerHTML ="este campo es obligatorio";
                nombre.style.border= '1px  solid  red';
                errorDiv.style.border= '1px solid red'; 
                
            } else if(apellido.value == ''){
                errorDiv.style.display= 'block';
                errorDiv.innerHTML ="este campo es obligatorio";
                apellido.style.border= '1px  solid  red';
                errorDiv.style.border= '1px solid red'; 
                
            } else if(email.value == ''){
                errorDiv.style.display= 'block';
                errorDiv.innerHTML ="este campo es obligatorio";
                email.style.border= '1px  solid  red';
                errorDiv.style.border= '1px solid red'; 
                
            }
            else{
                errorDiv.style.display = 'none';
                this.style.border= '1px  solid  #cccccc';
            }
        }
        function validarEmail(){
            if(this.value.indexOf("@") > -1){
                errorDiv.style.display = 'none';
                this.style.border= '1px  solid  #cccccc';

            }else{
                errorDiv.style.display= 'block';
                errorDiv.innerHTML ="El email debe tener @";
                email.style.border= '1px  solid  red';
                errorDiv.style.border= '1px solid red'; 
            }
            }
        
        

        function calcularMontos(event){
            event.preventDefault();

            var boletosDia = parseInt(kit_dia.value , 10 )|| 0;
            var boletos2Dias = parseInt(kit_2dias.value , 10 )|| 0;;
            var boletosSemanal = parseInt(kit_semanal.value , 10)|| 0;;
            var cantForm = parseInt(llenadoformulario.value , 10)|| 0;;

            var totalPagar = ((boletosDia*5) +(boletos2Dias*8) + (boletosSemanal*15) + (cantForm*7));
            console.log(totalPagar);
            
            var listadoProductos = [];
            if(boletosDia>=1){ 
            listadoProductos.push(boletosDia+ ' Kits un día');
            }if(boletos2Dias>=1){
            listadoProductos.push(boletos2Dias+ ' Kits dos días ');
            }if(boletosSemanal>=1){  
            listadoProductos.push(boletosSemanal+ ' Kits semanal');
            }
            if(cantForm>=1){
                listadoProductos.push(cantForm+' Llenados de formulario');
            }
             lista_productos.style.display="block";
             lista_productos.innerHTML='';
            for(var i=0; i< listadoProductos.length ; i++){
                lista_productos.innerHTML += listadoProductos[i] + '<br/>';
            }
            suma.innerHTML = "$ " + totalPagar.toFixed(2);
            botonRegistro.disabled = false;
            document.getElementById('total_pedido').value= totalPagar;
        }
        function mostrarDias(){
            var boletosDia = parseInt(kit_dia.value , 10 )|| 0,
                boletos2Dias = parseInt(kit_2dias.value , 10 )|| 0,
                boletosSemanal = parseInt(kit_semanal.value , 10)|| 0;

                var diasElegidos = [];

                if(boletosDia >= 1){
                    diasElegidos.push('Lunes');
                }if(boletos2Dias>=1){
                    diasElegidos.push('Lunes','Martes');
                }if(boletosSemanal>=1){
                    diasElegidos.push('Lunes','Martes','Miercoles');
                }

                for(var i=0 ; i< diasElegidos.length ; i++){
                    document.getElementById(diasElegidos[i]).style.display = 'block';
                }
        }
    }
      
    }); //DOM CONTENT LOADED
})();
//Letering
$('.nombre_sitio').lettering();

// Agergar clase a menu
$('body.destinos .navegacion_principal a:contains("Destinos")').addClass('activo');
$('body.calendario .navegacion_principal a:contains("Calendario de citas")').addClass('activo');
$('body.visas .navegacion_principal a:contains("Visas")').addClass('activo');
//Menu fijo
var windowHeight = $(window).height();
var barraAltura = $('.barra').innerHeight();
$(window).scroll(function(){
    var scroll= $(window).scrollTop();
    if(scroll > windowHeight){
    $('.barra').addClass('fixed');
    $('body').css({'margin-top': barraAltura+'px'});
    }else{
        $('.barra').removeClass('fixed');
        $('body').css({'margin-top':'0px'});
    }
});
//Menu Responsive

$('.menu_movil').on('click', function(){
$('.navegacion_principal').slideToggle();
});

$(function(){
    //Programa de conferencias
    $('div.ocular').hide();
    $('.programa_evento .info_curso:first ').show();

    $('.menu_programa a:first').addClass('activo');
    $('.menu_programa a').on('click', function(){
    $('.menu_programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').fadeOut(300);
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(300);
    return false;
});

//Animaciones para los numeros
var resumenLista = jQuery('.resumen_cursos');
if(resumenLista.length>0){
    $('.resumen_cursos').waypoint(function(){
        $('.resumen_cursos li:nth-child(1) p').animateNumber({number:6  }), 1500;
        $('.resumen_cursos li:nth-child(2) p').animateNumber({number:2 }), 2000;
        $('.resumen_cursos li:nth-child(3) p').animateNumber({number:3 }),2500;
        $('.resumen_cursos li:nth-child(4) p').animateNumber({number:1 }), 1000;
     }, {
         offset:'60%'
     }
     );
}
// Destinos Colorbox
$('.destino_info').colorbox({inline:true, width:"50%"});
$('.boton_newsletter').colorbox({inline:true, width:"50%"});
});