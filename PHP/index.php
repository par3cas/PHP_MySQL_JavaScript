<?php //forma recomendada de abrir una etiqueta php
  echo "Hello world";
?> 
<br>


<? //Aunque no es tan obvio que se esté llamando al analternativa válida que también suele funcionar.  Pero desaconsejo su uso, ya que es incompatible con XML y ahora está obsoleta (lo que significa que ya no se recomienda su uso y podría no tener soporte en versiones futuras).  
echo "Hello World"."<Br>"
// This is a comment 
// echo "X equals $x";  Comentario usado para eliminar una línea de codigo
/* This is a section
   of multiline comments
   which will not be 
   interpreted */
// el anerior comentario se usa para Un comentario de varias líneas 
//el simbolo $ se coloca siempre delante de una variable Esto es necesario para que el analizador de PHP actúe más rápido, ya que sabe instantáneamente cuando se encuentra con una variable. 

?>

<?php
//Tres clases diferentes de asignación de variables:
  echo "<Br>"."1. ASIGNACION DE VARIABLES"."<Br>";
  $mycounter= 1;
  $mystring = "Hello";
  $myarray = array("one", "two", "Three");
  echo "<br>";
  echo $mystring;
  echo "<Br>";
  echo $mycounter."<Br>";
  echo $myarray [0]."<Br>";
  print_r ($myarray); //print_r Muestra todos los valores del arreglo y sus indices
?>


<Br>




<?php // test1.php
echo "<Br>";
  $username = "Parmenio Angulo Rodriguez";  //declaramos la variable username y le asignamos el valor de Parmenio Angulo Rodriguez
  echo $username;
  echo "<br>";
  $current_user = $username; 
  echo $current_user; 
  echo "<br>";

  $name= "Parmenio";
  echo $name;
  echo "<Br>";
  echo "<Br>";
  echo "2. VARIABLES NUMERICAS ";
  echo "<Br>";
$count=17;
echo "<br>";
echo $count;

$team = array ('Cristiano', 'Maradona', 'Pele','Messi', 'James' );
echo "<br>";
echo $team[0];
echo "<br>";
print_r ($team);
echo "<br>";
?> 


<?php

echo "<br>";
echo "3. MATRICES DE DOS DIMENSIONES:"; 
/*De nuevo, hemos avanzado un paso en complejidad, pero es fácil de entender si captas 
la sintaxis básica de la matriz. Hay tres constructores de array() anidadas dentro del 
constructor externo array(). Con cada jugada, hemos rellenado cada fila con una matriz
que consta solo de un carácter: una x, una o, o un espacio en blanco. (Usamos un espacio
en blanco para que todas las celdas tengan la misma anchura cuando se visualizan). 
Para conocer el tercer elemento en la segunda fila de esta matriz, usaríamos el siguiente
comando PHP, que mostrará una x:*/

echo "<br>";

$oxo = array(array('x', ' ', 'o'),
               array('o', 'o', 'x'),
               array('x', 'o', ' '));
               echo $oxo [2] [0];
               echo "<br>";
               echo $oxo  [1] [0];
               echo "<br>";
               print_r ($oxo);
               echo "<br>";


echo "<br>";
echo "4. OPERADORES:"; 
echo "<br>";
echo "<br>";
echo "4.1 Operadores aritmeticos:"; 
echo "<br>";
echo "<br>";

 echo 6 + 2; 
 $j =50;
 echo "<br>";
 echo $j+1;
 echo "<br>";
 echo $j-1;
 echo "<br>";
 echo $j*2;
 echo "<br>";
 echo $j/2;
 echo "<br>";
 echo $j%100;
 echo "<br>";
 echo ++$j;
 echo "<br>";
 echo --$j;
 echo "<br>";
 echo $j**2;
 echo "<br>";
 ?> 


<?php

echo "<br>";
echo "<p> 4.2 Operadores  de Asignacion</p>";
echo "<br>";
$num=100;
echo $num;
echo "<br>";
$num += 100;
echo $num;
echo "<br>";
$num -= 100;
echo $num;
echo "<br>";
$num *= 100;
echo $num;
echo "<br>";
$num /= 100;
echo $num;
echo "<br>";
$num1=10;
echo $num1;
echo "<br>";
$num *= $num1;
echo $num;
$num %= 30;
echo $num;
echo "<br>";


?>

<?php
echo "<br>";
$num=23; //el resultado muestra 3 que es el resulado de dividir 23 entre 10 y 3 es el residuo
$num %=10;
echo $num;
?>



<?php
echo "<p>Tabla 3-3. Operadores de comparación </p>";
echo "<br>";
$r = 2;
echo $r;
echo "<br>";
$r !=21;
echo $r;
echo "<br>";
$r >3;
echo $r;
echo "<br>";
$r ===750;
echo $r;
echo "<br>";
$r ==4;
echo $r;
echo "<br>";
?>


<?php
echo "<p>Asignación de valores a variables  </p>";
echo "<br>";
$x = 2; 
echo $x;
echo "<br>";
$x += 10; 
echo $x;
echo "<br>";
if (++$x == 30) echo $x;
echo $x;
echo "<br>";
$y =0;
if ($y-- == 0) echo $y; //la variable y se incrementó despues de la prueba logica porque el operador esta despues de la variable
echo "<br>";
?>


<?php
echo "<p>Asignación de valores a variables  </p>";
echo "<br>";
$x +=34;
echo $x;
echo "<br>";
$y -=10;
echo $y;
echo "<br>";
++$x;
++$x;
--$y;
echo $y;
echo "<br>";
echo $x;
echo "<br>";
echo $x;
echo "<br>";
--$y;
echo $y;
echo "<br>";
++$x;
echo "<br>";
++$x;//53
echo $x;
echo "<br>";
++$x;//54
echo $x;
echo "<br>";
echo $x;
++$x; //55
echo $x;

if (++$x ==55); echo$x;
echo "<br>";
if ($x-- ==55);
echo $x;
?>

<?php
echo "<p>prueba ++$x</p>"; 
++$x;
echo "<br>";
echo $x;
?>

<?php
echo "<p>++Concatenación de cadenas de caracteres++</p>";
echo "<br>";
echo "Tienes " . $x . " Mensajes"
?>
<?php
echo "<p>++CALCULADORA DE EDAD++</p>";
echo "<br>";
$n = 1970;
echo "<br>";
echo "año de nacimiento: " . $n;
$a= 2022;
echo "<br>";
echo "año actual: " . $a;
echo "<br>";
$e= $a-$n;
echo "Si tu naciste en 1970,  tienes " . $e . " años";
echo "<br>";
$hijo = "Parmenio Angulo Rodriguez y ";
$hija = "Ana Beatriz  Angulo Rodriguez, son hermanos";
echo $hijo . $hija;
$text = 'My spelling \'s still atroshus'; 
$text = "She wrote upon it, \"Return to sender\"."; 
$heading = "Date\tName\tPayment"; 
echo "<br>";
?>
<?php
  $author = "Steve Ballmer"; 
 
  echo "Developers, developers, developers, developers, developers, 
  developers, developers, developers, developers! 
 
  - $author.";
?> 
<?php
echo "<br>";
  $author = "Bill Gates";
  $text = "Measuring programming progress by lines of code is like 
  Measuring aircraft building progress by weight. 
 
  - $author.";
  echo $text;
?> 
<?php
echo "<br>";
  $author = "Brian W. Kernighan"; 
   
  echo <<<_END
  Debugging is twice as hard as writing the code in the first place. 
  Therefore, if you write the code as cleverly as possible, you are, 
  by definition, not smart enough to debug it. 
 
  - $author.
_END;
?>
<?php
echo"<br>";
echo"<br>";
  $author = "Scott Adams";

  $out = <<<_END
  Normal people believe that if it ain't broke, don't fix it. 
  Engineers believe that if it ain't broke, it doesn't have enough   
  features yet. 
 
  - $author.
_END;
echo $out;
echo"<br>";
?> 

<?php
echo "<p>Tipificación de variables<p>";
echo"<br>";

// se asigna la variable $number que corresponde a la multiplicacion de 12345 * 67890 y se le dice a partir de que numero extraiga la cantidad de numeros que se requieran del resultado
  $number = 12345 * 67890;
  echo"<br>";
  echo $number;
  echo"<br>";
  echo substr($number, 3, 3);
  echo"<br>";
$nombre = "Parmenio Angulo rodriguez";
echo substr($nombre, 9, 3);

  echo"<br>";

?> 

<?php
  $pi = "3.1415927"; 
  $radius = 5;
  echo $pi * ($radius * $radius);
  echo"<br>";
  echo"<br>";
  echo "++Constantes++"; 
  echo"<br>";
?> 

<?php
  echo"<br>";
  echo "++Constantes predefinidas++"; 
  echo"<br>";
?> 

<?php
  echo"<br>";
  echo "++Constantes predefinidas++"; 
  echo"<br>";
  echo "This is line " . __LINE__ . " of file " . __FILE__;
  echo"<br>";
  echo "This is line " . __LINE__ . " of file " . __FILE__;
  echo"<br>";
?> 


<?php
  define("ROOT_LOCATION", "/usr/local/www/"); 
  echo"<br>";
  $directory = ROOT_LOCATION; 
  echo $directory;
  echo"<br>";
  $b ? print "TRUE" : print "FALSE"; 
  echo"<br>";
 ?> 

<?php
  $temp = "The date is ";
  echo longdate($temp, time()); 
 
  function longdate($text, $timestamp)
  {
    return $text . date("l F jS Y", $timestamp);
  }
?>

<?php
  function test()
  {
    static $count = 0; 
    echo $count;
    $count++;
    
  } 
?> 