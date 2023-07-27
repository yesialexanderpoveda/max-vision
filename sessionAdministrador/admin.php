<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxVision</title>

  <!--  importar valores de menu  -->
  <link rel="stylesheet"  href="../menus/estilos/menu.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet"> 


</head>
<body>
    
    <?php
        session_start();
        if (!isset($_SESSION['rol']) && empty($_SESSION['rol'])&& $_SESSION['rol'] != "Admin") {
         header("Status: 301 Moved Permanently");
         header("Location: ../index.php");
         echo"<script language='javascript'>window.location='index.php'</script>;";
         echo 'entre';
         exit();
         
        }
        include "../menus/menu.php";
        $log = new Menu();
        $log->validateMenu($_SESSION['rol'], "../public/logo.png", $_SESSION['nombre'], "../cerrarSession.php");
        session_destroy();
    ?>
    <h1>Soy Administrador</h1>


    <!--  importar valores de menu  -->
<script src="../menus/javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>
</html>