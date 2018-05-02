<body>
    <div class="container">
      <div class="row py-5">
        <div class="col">
          <h1><?php print($title);?></h1>
          <h3>Hoy es la clase <?php print($number); # imprime partes del php variable que se llamó arriba?></h3>
          <h5 class="my-3"><?php print($fecha);?></h5>
          <p>A continuación usaré el <a href="http://php.net/manual/es/function.print-r.php">print_r</a> para mostrarles la información de algunas variables:</p>
          <hr>
          <pre class="my-3"><code><?php print_r($arreglo);?></code></pre>

          <p>Puedo consultar el arreglo con un <a href="http://php.net/manual/es/control-structures.for.php">ciclo for</a>. En este caso presento algunos personajes de las animaciones que me han gustado.</p>

          <ul>
            <?php for ($a=0; $a < count($arreglo) ; $a++) { 
              print('<li>'.$arreglo[$a].'</li>');
            }?>
          </ul>

          <hr>
          <pre class="my-3"><code><?php print_r($arreglobjeto);?></code></pre>
          

          <p><b>
            Mi nombre es
            <?php print ($arreglobjeto[nombres].' '.$arreglobjeto[apellidos]); ?>,
            tengo <?php print ($arreglobjeto[edad]);?> años,
            mi signo es <?php print ($arreglobjeto[signo]);?>,
            y mi animal favorito es el <?php print ($arreglobjeto[animal]);?>.</b>
          </p>


          <hr>


          <p>Tengo información de los siguientes planetas de StarWars:
            <b><?php for ($i=0; $i < count($csv) ; $i++){ 
              if ($i < count($csv)-2){ 
                print($csv[$i][name].', ');
              } else if ( $i == count($csv)-2){
                print ($csv[$i][name].' y '); # en el último caso, que es 8, pone el punto
              } else{
                print ($csv[$i][name].'.');
            }
          }?></b>
          </p>


          <p>Lo que sigue es un <a href="https://github.com/profesorfaco/dno037-2018-09/blob/master/data/swapi-planets.csv">CSV</a> que armé tomando lo que necesitaba de <a href="https://swapi.co/">SWAPI</a>:</p>

          <pre class="my-3"><code><?php print_r($csv);?></code></pre>

          <hr>
          <pre class="my-3"><code><?php print_r($datosjson);?></code></pre>
          <p>En las últimas 24 horas, han sido registrados <?php print(count($datosjson[features]));?> temblores de magnitud igual o superior a 4.5 . El más reciente: <?php print($datosjson[features][0][properties][title])?></p> 
          <p>Si le dan un vistazo al párrafo anterior con "ver código fuente", no encontrarán nada más que HTML. Pero, si lo revisan en sus editores de código podrán ver PHP.</p> 
        </div>
      </div>
    </div>
    <script>
      //¿Puedo mezclar PHP y JavaScript?
      var starwars = JSON.parse('<?php print($arreglinjson);?>');
      //si, acá tienes un ejemplo.
      console.log(starwars);
      //si mezclan: háganlo con cuidado, para no confundir sintaxis
      console.log("El planeta más grande es " + starwars[5].name);
    </script>
  </body>