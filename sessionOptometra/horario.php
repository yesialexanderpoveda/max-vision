<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxVision</title>
</head>
<body>
    <div>Horario</div>
     
   <?php
   
   include "../db.php";
   $sql = 
   'SELECT usuarios.nombre, usuarios.apellido, horario.fecha, horario.horas 
   FROM citas 
   INNER JOIN horario ON citas.horario_id_horario = horario.id_horario 
   INNER JOIN usuarios ON citas.usuarios_id_usuarios1 = usuarios.id_usuarios 
   WHERE usuarios.documento = 98888';

$result = $con->query($sql);

// capacidad de avisar al cliente que no puede atender la cita
if ($result->num_rows>0) {

 while ( $fila=$result->fetch_assoc() )  {
     // 54:38 
     /*  print_r($fila); */
    
     echo "id: " . $fila['nombre'] . $fila['apellido'] . $fila['fecha'] . $fila['horas'] . "<br/>";
 
  
     
 }
 

} else {
 echo "<p>A ocurrido un error vuelve a intentarlo</p>";
}



   ?>

</body>
</html>