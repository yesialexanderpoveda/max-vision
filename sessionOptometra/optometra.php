
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxVision</title>
    
  <!--  importar valores de menu  -->
  <link rel="stylesheet"  href="../menus/estilos/menu.css"> 
  <link rel="stylesheet" href="./estilos/optometra.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet"> 

</head>
<body>
<?php 
   session_start();
   $val = $_SESSION['rol'];
   $rol = $_SESSION["idRolUser"];
   if (!isset($_SESSION['rol']) && empty($_SESSION['rol']) && $val !== "Optometra") {
    header("Status: 301 Moved Permanently");
    header("Location: ../index.php");
    echo"<script language='javascript'>window.location='index.php'</script>;";
    exit();
    
   }
   
  include "../menus/menu.php";
   $log = new Menu();
   $log->validateMenu($_SESSION['rol'], "../public/logo.png", $_SESSION['nombre'], "../cerrarSession.php");
   ?>

   <div>
   
   <h1>Cronograma de citas</h1>

   <section>
    <form method="GET">
    <iconify-icon icon="clarity:employee-solid" style="color: #bf7449;"></iconify-icon>
    <input type="text" name="citas">
    <button type="submit">Buscar</button>
    </form> 
     <span>nombre paciente</span>
     <span>dia</span>
     <span>hora</span>
   </section>
   
   <?php 
   include "../db.php";
   $citas = [];
   if (!empty($_POST["citas"])) {
   

   }else{

   $sql = 'SELECT 
   usuarios.nombre,
   usuarios.apellido,
   horario.fecha,
   horario.horas,
   consultorio.direccion
FROM
   citas
JOIN
   usuarios ON usuarios.id_usuarios = citas.usuarios_id_usuarios1
JOIN
   horario ON horario.id_horario = citas.horario_id_horario
JOIN
   consultorio ON consultorio.id_consultorio = citas.consultorio_id_consultorio
WHERE
   usuarios.roles_idroles = 3 AND consultorio.usuarios_id_usuarios = 5';

$result = $con->query($sql);
if ($result->num_rows>0) {

  while ( $fila=$result->fetch_assoc() )  {
      // 54:38 
      /*  print_r($fila); */
     
      echo "id: " . $fila['nombre'] . $fila['apellido'] . $fila['fecha'] . $fila['horas'] . "<br/>";
  
   
      }
  
 
 } else {
  echo "<p>A ocurrido un error vuelve a intentarlo</p>";
 

}

          
   }

   ?>
   

   </div>

 
 
       <!--  importar valores de menu  -->
<script src="../menus/javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


</body>
</html>