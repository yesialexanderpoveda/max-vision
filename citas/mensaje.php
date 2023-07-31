<?php 

include 'c:\xampp\htdocs\interfaces\conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      
       /*  if (isset($_REQUEST['optometrist'])) {
            $id_usuario = $_REQUEST['optometrist'];
 */
        
//nombre fecha hora direccion y opto
$sql = 'SELECT 
UCliente.nombre AS nombre_cliente,
H.fecha,
H.horas,
UOptometra.nombre AS nombre_optometra,
Consultorio.direccion AS consultorio 
FROM citas AS C
JOIN usuarios AS UCliente ON UCliente.id_usuarios = C.usuarios_id_usuarios1
JOIN horario AS H ON H.id_horario = C.horario_id_horario
LEFT JOIN consultorio AS Consultorio ON Consultorio.id_consultorio = C.consultorio_id_consultorio
LEFT JOIN usuarios AS UOptometra ON UOptometra.id_usuarios = Consultorio.usuarios_id_usuarios
WHERE UCliente.roles_idroles = (SELECT idroles FROM roles WHERE nom_rol = "Cliente")
AND UCliente.id_usuarios = 1' /* . $id_usuario */;
//1 = user

// Ejecutar la consulta
$resultado = mysqli_query($conex, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $mensaje = mysqli_fetch_assoc($resultado);
    $nombre_cliente = $mensaje['nombre_cliente'];
    $fecha = $mensaje['fecha'];
    $hora = $mensaje['horas'];
    $nombre_optometra = $mensaje['nombre_optometra'];
    $direccion = $mensaje['consultorio'];

    echo "<h1>Hola " . $nombre_cliente . ", MAXVISION te informa que tu cita para el día " . $fecha . " a las " . $hora ." con el optometra " . $nombre_optometra . " en " . $direccion . " fue asignada con éxito.</h1>";

} else {
    echo "<h1>No se encontró información para el usuario con ID: 1 </h1>";
}

mysqli_free_result($resultado);
/* } else {
    echo "<h1>No se recibió el parámetro 'id_usuario' en la URL</h1>";
} */


// Cerrar la conexión
mysqli_close($conex);

    
    ?>
    
    <!-- mensaje para whatsapp -->
</body>
</html>