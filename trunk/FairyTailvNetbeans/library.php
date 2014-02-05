<?php
// La función generar_pj lo que hace es llevar el hilo principal de la generación de personajes.
function generar_pj(){
    car_gen();
    car_sel();
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

function car_sel($car_array){
    // Esta función repartirá las características
    $constitucion = $car_array[0];
    $inteligencia = $car_array[1];
    $destreza = $car_array[2];
    $presencia = $car_array[3];
    $sentidos = $car_array[4];
}
?>