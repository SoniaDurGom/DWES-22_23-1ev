<?php
//Almacenar datos en un array asociativo
$cotas=["Lunes"=>["TemperaturaMaxima" =>14],
       "Martes"=>["TemperaturaMaxima" =>12],
       "Miercoles"=>["TemperaturaMaxima" =>13],
       "Jueves"=>["TemperaturaMaxima" =>13],
       "Viernes"=>["TemperaturaMaxima" =>14],
       "Sabado"=>["TemperaturaMaxima" =>15],
       "Domingo"=>["TemperaturaMaxima" =>17]

];

//Añadir clave de temperatura minima. Generada aleatoria entre 5 y 10 grados menos que la maxima
foreach ($cotas as $dias) {
   foreach ($dias as $key => $temperatura) {
    $arrTempMin=["TemperaturaMinima" => $temperatura - rand(5,10)];
    array_push($dias, $arrTempMin);
    // var_dump($dias);
   }
}

// var_dump($cotas);

//Crea y guarda jason
file_put_contents("./temperaturas.json",json_encode($cotas, JSON_UNESCAPED_UNICODE));


//Leerlo
$array= json_decode(file_get_contents("./temperaturas.json"),true,512,JSON_UNESCAPED_UNICODE);


