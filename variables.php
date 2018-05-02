<?php

$number = 9;

$title = "Esto es PHP";

$fecha = date(j.'/'.M.'/'.Y); #Función de FECHA

// en arreglos hay hartas diferencias con JavaScript:

$arreglo = array("Baymax","Mama Coco","Delacrusito");

$arreglobjeto = array("apellidos"=>"Vargas Catalán","nombres"=>"Fernanda Andrea","edad"=>"22","signo"=>"Aries","animal"=>"Perro Boxer");

// pueden cometar líneas 18, 19, 20 y 21, y ver la diferencia

$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2018-09/master/data/swapi-planets.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);

//voy a buscar un archivo, y lo voy a decodificar como JSON

$datos = file_get_contents('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson');

$datosjson = json_decode($datos,true);

//último truco: voy a tomar un csv y lo voy a transformar en JSON

$arreglin = $csv;

$arreglinjson = json_encode($arreglin);

?>