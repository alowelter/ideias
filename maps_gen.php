<?php
// Gerar url de carregamento do googlemaps
function monta() {
    $cord = [
        [-27.62183590736462, -48.67750872224158],
        [-27.62420997875315, -48.68152344089844],
        [-27.620317114157633, -48.68377890081801],
        [-27.622259566975043, -48.669930376911815],
    ];

    $aspa = "'";
    $vg = ",";
    $zoom = '18z'; // de 1 a 22
    
    $carro = '!3e0';
    $a_pe = '!3e2';
    $bicicleta = '!3e1';
    $onibus = '!3e3';
    
    $terreno = '!3m1!4b1';
    $satelite = '!3m1!1e3';
    
    $visao = $terreno; //$satelite;
    $meio_transporte = $carro;
    $url = 'https://www.google.com/maps/dir/';

    $ret = '';
    foreach($cord as list($lat, $lng)) {
        $ret .= $aspa.$lat.$vg.$lng.$aspa;
        $ret .='/';
    }
    $ret .= "@0,0,$zoom/data=$visao!4m10!4m9!1m3!2m2!1d0!2d0!1m3!2m2!1d0!2d0$meio_transporte";
    return $url . $ret;
}

echo monta();
