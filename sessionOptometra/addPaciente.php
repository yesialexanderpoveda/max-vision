
<?php 
/* $subs_name = ($_POST['name']);
$subs_last = ($_POST['lastname']);
$subs_email = ($_POST['email']);
$subs_phone = ($_POST['phone']);
$subs_genrer = ($_POST['genero']);
$subs_rh = ($_POST['rh']);
$subs_idType = ($_POST['idType']);
$subs_id = ($_POST['id']);
$subs_born = $_REQUEST['anio'] . "-" . $_REQUEST['month'] . "-" . $_REQUEST['day'];

include "../db.php";

$sql = "INSERT INTO paciente (nombre, apellido, correo, telefono, genero, RH, tipo_de_documento, documento, fecha_nacimiento) 
  VALUES ('$subs_name','$subs_last', '$subs_email', '$subs_phone', '$subs_genrer', '$subs_rh', '$subs_idType',  $subs_id, '2022-04-10')";
  


if ($con->query($sql)){
    echo "<p>Registro agregado.</p>";
    } else {
    echo "<p>No se agregó...</p>";
    }  */


    $data = array(
        'msg' => 'Petición exitosa', 
        'datos_cliente' => $_POST['nombre'], 
        'error' => false
    );

    $data = json_encode($data);
    echo $data;




?>



