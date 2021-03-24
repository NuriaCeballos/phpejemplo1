<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="palabra">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $cadena = $_POST["palabra"];
  $cadenainvertida = strrev($cadena);
 if (strcmp($cadena, $cadenainvertida)==0){
    echo "<p>La cadena $cadena es un palíndromo</p>";
} 
else{
    echo "<p>La cadena $cadena no es un palíndromo</p>";
}
}
?>

</body>

</html>

<!-- pedir a usu una palabra a pulsar boton
decir si la palabra es palindroma-->