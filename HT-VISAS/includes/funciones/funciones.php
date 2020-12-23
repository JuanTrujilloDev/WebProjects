<?php 

function productos_json(&$kits, &$formulario=0){
    $dias = array(0 => 'kit_dia', 1=> 'kit_semanal' , 2=> 'kit_2dias');
   $total_kits = array_combine($dias, $kits);
   $json = array();

foreach($total_kits as $key => $kits):
    if((int) $kits > 0):
         $json[$key] = (int) $kits;
    endif;
endforeach;

$formulario = (int) $formulario;
if($formulario > 0):
    $json['formulario'] = $formulario;
endif;
return json_encode($json);

}
function eventos_json(&$eventos){
    $eventos_json = array();
    foreach ($eventos as $evento):
        $eventos_json['eventos'][] = $evento;
    endforeach;

    return json_encode($eventos_json);
}
?>