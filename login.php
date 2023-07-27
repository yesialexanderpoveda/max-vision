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
<form  method="POST">

  <label for="rol">Rol</label>
  <select name="rol" id="">  
  <option></option>
  <option value="Cliente">Cliente</option>
   <option value="Auxiliar">Auxiliar</option>
  <option value="Optometra">Optometra</option>
  
 </select>
 </br>
 </br>
 <label for="id">Identificacion</label>
 <input type="text" name="id">
 </br>
 </br>
 <label for="password">Contraseña</label>
 <input type="password" name="password">
 </br>
 </br>
 <button type="submit">Ingresar</button>
</br>
</br>
</form>

 <?php

  if (!empty($_POST["password"]) && !empty($_POST["id"])) {
    include "controller_login.php";
    $log = new Login();
    $log->login($_POST["id"], $_POST["password"], $_POST["rol"]);
  }
  
 
 ?>


<!--  importar valores de menu  -->
<script src="./menus/javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>