<!DOCTYPE html>
<html lang="en">

<head>

    <title>PRODUCTOS</title>
</head>

<body>



<form action="" method="post">
<label for="">producto</label>
<input type="text" name="productos">
<button type="submit">Subir producto</button>
</form>

    <?php

require "./conexion.php";

    $nombre=$_POST['productos'];

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

      $registro=mysqli_query($conn, "insert into descripciones (productos,descripcion,tipo,imagen) values 
    ('{$_REQUEST['productos']}','{$_REQUEST['descripcion']}','{$_REQUEST['tipo']}','{$_REQUEST['Descripcion']}','$imagen')")
     or die("Hay problemas en el select" . mysqli_error($con));
    mysqli_close($con);

    echo "El producto ha sido ingresado con éxito";
    ?>
</body>

