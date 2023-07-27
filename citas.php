<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxVision</title>

  <!--  importar valores de menu  -->
  <link rel="stylesheet"  href="./menus/estilos/menu.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet"> 

</head>
<body>
    
<?php 
include "./menus/menu.php"; $log = new Menu(); $log->getMenu("./public/logo.png");
?>

<h1>Citas</h1>
<!--  importar valores de menu  -->
<script src="./menus/javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>
</html>