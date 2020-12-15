<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Francisco
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
  

          
          

<?php

$dado1=rand(1,6);
$dado2=rand(1,6);
$dado3=rand(1,6);



//suma
$suma= $dado1 + $dado2 + $dado3;
echo 'Valor Total conseguido: '.$suma;



/////////////

?>


<p>
            <img src="img/<?php echo $dado1;?>.svg"  width="140" height="140">
            <img src="img/<?php echo $dado2;?>.svg"  width="140" height="140">
            <img src="img/<?php echo $dado3;?>.svg"  width="140" height="140"> 
           
          </p> 




<br>
<p>Valor Total conseguido: </p>

<?php echo $suma; ?>
<br>
          <p><a href="tirada-dados-1.php">Volver a tirar</a></p>
<footer>
  <p>Fran</p>
</footer>
</body>
</html>
