<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar </title>
    <center>
        <div class="logo-container">
            <img src="logo.png" alt="Logo de tu sitio web" id="logo">
        </div>
    </center>
</head>

<body>
    <center>

        <h1> Modificar productos</h1>
        <form action="guardar.php" method="post" enctype="multipart/form.data">


            <input type="" name="productos" placeholder="productos_idproductos " value="" />

            <br><br>
            <input type="text" name="descripcion" placeholder="descripcion " value="" />
            <br><br>
            <input type="text" name="tipo" placeholder="tipo " value="" />
            <br><br>
            <input class="form-control" type="file" name="imagen" id="formFileMultiple">
            <br>
            <br><br>
            <input type="submit" value="actualizar">
    </center>

    </form>

<?php



if(isset($_POST["submit"])){

    $revisar = getimagesize($_FILES["imagen"]["tmp_name"]);

    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
      
        
        require "./conexion.php";
        
        //Crear conexion con la abse de datos
        
        // Cerciorar la conexion
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into descripciones (productos_idproductos, descripcion,tipo,) VALUES ('$imgContenido',())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>

</body>

</html>