<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include './header.php';?>
<?php include './footer.php';?>

<?php  
    $pag="home";
    if(isset($_GET['pag']))$spag=$_GET['pag'];
    if($pag=="home")include './home.php';
    if($pag=="quienes")include './quienes.php';
    if($pag=="contacto")include './contacto.php';
   

  ?>


</body>
</html>