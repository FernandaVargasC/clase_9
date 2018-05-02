# Clase 9 → Miércoles 2 de mayo

### PHP

[PHP](http://php.net/manual/es/intro-whatis.php) es un lenguaje de programación que se ejecuta en el servidor. Allí genera HTML para enviar al cliente como respuesta a cada solicitud. Por esto, cuando en un navegador revisas el código fuente de una página web de extensión PHP, nunca verás lo que fue programado en un principio, solamente verás el resultado que es HTML. Por esto también, es necesario contar con un servidor que ejecute lo que se programe en PHP.

**Para esta clase, y las que siguen, es necesario que tengan en sus computadores un entorno de servidor local; una forma sencilla de cumplir con esto es instalando [MAMP (FREE)](https://www.mamp.info/en/)**.

Y desde esta clase, GitHub Pages dejará de sernos útil: "GitHub Pages is a static site hosting service and **doesn't support server-side code such as, PHP**, Ruby, or Python" ([What is GitHub Pages?](https://help.github.com/articles/what-is-github-pages/)). Desde esta etapa, pondremos los resultados de cada clase en línea usando [FTP](https://es.wikipedia.org/wiki/Protocolo_de_transferencia_de_archivos).

PHP, como lenguaje de programación, tiene su sintaxis, semántica y usos. Eso es lo que comenzaremos a revisar a continuación.

#### Variables en PHP

Así como en JavaScript, en PHP tampoco es necesario indicar el tipo de variable. En PHP se escribe el nombre de la variable, antecedido de un símbolo monetario `$`, sin espacio.

Una variable a la que se le asigna un número como contenido: `$a = 1;`

Una variable a la que se le asigna una cadena de caracteres como contenido:`$a = "uno";`

Una variable a la que se le asigna un arreglo como contenido: `$a = array("uno", "dos", "tres","cuatro");`

Por ahora, no revisaremos los objetos en PHP. Pero vamos a profundizar en los "arrays dentro de arrays dentro de arrays dentro de…":

`$inception = array("el sueño en la van",array("el sueño en el hotel",array("el sueño en la nieve",array("el sueño en la ciudad abandonada"))))`

La información legible en la variable `inception` es:
```
Array
(
    [0] => el sueño en la van
    [1] => Array
        (
            [0] => el sueño en el hotel
            [1] => Array
                (
                    [0] => el sueño en la nieve
                    [1] => Array
                        (
                            [0] => el sueño en la ciudad abandonada
                        )

                )

        )

)
```
Si queremos que nos entregue, por ejemplo, el sueño más profundo (el sueño en la ciudad abandonada), tenemos que ir a por `$inception[1][1][1][0]`.

Modifiquemos el ejemplo, porque podemos escribir el arreglo `inception` de otra manera:

`$inception = array("primero"=>"el sueño en la van","segundo"=>"el sueño en el hotel","tercero"=>"el sueño en la nieve","cuarto"=>"el sueño en la ciudad abandonada")`

Ahora la información legible dentro de la variable es:

```
Array
(
    [primero] => el sueño en la van
    [segundo] => el sueño en el hotel
    [tercero] => el sueño en la nieve
    [cuarto] => el sueño en la ciudad abandonada
)
```

En esta caso, si queremos que nos entregue el sueño más profundo (el sueño en la ciudad abandonada), le tenemos que solicitar un `$inception["cuarto"]`.

- - - - - - - - - - 

[Clase anterior](https://github.com/profesorfaco/dno037-2018-08) | [Siguiente clase](https://github.com/profesorfaco/dno037-2018-10)
