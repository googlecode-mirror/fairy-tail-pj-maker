<?php
// La función generar_pj lo que hace es llevar el hilo principal de la generación de personajes.
function generar_pj(){
    car_gen();
}

// La función char_gen genera seis tiradas y las ordena de mayor a menor.
// Sólo hay cinco características, el motivo de hacer esto es desechar la menor.
function car_gen(){
    $car_array = array();
    for ($i=0; $i<=5; $i++){
        array_push ($car_array, rand (3,10));
    }
    rsort ($car_array);
}
?>