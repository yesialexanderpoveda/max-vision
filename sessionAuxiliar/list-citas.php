<?php 
include 'C:\xampp\htdocs\interfaces\conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
   session_start();
   $val = $_SESSION['rol'];
   $rol = $_SESSION["idRolUser"];
   if (!isset($_SESSION['rol']) && empty($_SESSION['rol']) && $val !== "Auxiliar") {
    header("Status: 301 Moved Permanently");
    header("Location: ../index.php");
    echo"<script language='javascript'>window.location='index.php'</script>;";
    exit();
    
   }
   
  include "../menus/menu.php";
   $log = new Menu();
   $log->validateMenu($_SESSION['rol'], "../public/logo.png", $_SESSION['nombre'], "../cerrarSession.php");
   ?>
<?php 
$sql = "SELECT U.nombre, 
H.fecha, 
H.horas 
FROM citas AS C
JOIN usuarios AS U
ON u.id_usuarios = c.usuarios_id_usuarios1
RIGHT JOIN horario AS H
ON H.id_horario = C.horario_id_horario;";
$resultado = mysqli_query($conex, $sql);

while ($consult = mysqli_fetch_array($resultado)) {
$nombre =$consult['nombre'];
$fecha = $consult['fecha'];
$horas = $consult['horas'];

echo "<div class='d-grid gap-2'>
 <h3> $nombre  $fecha    $horas </h3></div>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
</body>
</html>