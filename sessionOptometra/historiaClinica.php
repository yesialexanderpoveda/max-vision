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

  <!-- historia clinica css -->

  <link rel="stylesheet" href="./estilos/historiaClinica.css">
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
  <div class="h">

    <div class="h-citas">
        <div class="h-menu">
        <div class="icon"><iconify-icon width="1.3em" icon="mdi:paperclip-plus" style="color: #eed5b3;"></iconify-icon> Agregar Paciente </div>
        <div class="icon"><iconify-icon width="1.3em" icon="fluent-mdl2:profile-search" style="color: #eed5b3;"></iconify-icon>Pacientes</div>
        <div class="icon"><iconify-icon width="1.3em" icon="codicon:source-control" style="color: #eed5b3;"></iconify-icon>Controles</div>
        <div class="icon"><iconify-icon width="1.3em" icon="iconoir:add-lens" style="color: #eed5b3;"></iconify-icon>Reseta de lentes</div>
        <div class="icon"><iconify-icon width="1.3em" icon="mdi:paperclip-plus" style="color: #eed5b3;"></iconify-icon>Agregar Diagnostico</div>
     </div>
    <form  action="addPaciente.php" method="POST">
      <label for="">Nombre</label>
      <input type="text" name="name">
      <label for="">Apellido</label>
      <input type="text" name="lastname">
      <label for="">Correo</label>
      <input type="text" name="email">
      <label for="">telefono</label>
      <input type="text" name="phone">
      <label for="">genero</label>
      <input type="text" name="genero">
      <label for="">RH</label>
      <input type="text" name="rh">
      <label for="">tipo documento</label>
      <input type="text" name="idType">
      <label for="">documento</label>
      <input type="text" name="id">
      <h4>Fecha de nacimiento</h4>
      <label for="">anio</label>
      <input type="text" name="anio">
      <label for="">Mes</label>
      <input type="text" name="month">
      <label for="">dia</label>
      <input type="text" name="day">
      
      <button type="submit">Registrar</button>
   
    </form>
  </div>
  
  <footer><p>Informacion legal</p> <p>Politica de privacidad</p></footer>
  </div>
  
  <?php


$data = array('msg' => 'Petición exitosa', 'datos_cliente' => $_POST['func'], 'error' => false);

$data = json_encode($data);
echo $data;

  $sql = "INSERT INTO paciente (id_paciente, nombre, apellido, correo, telefono, genero, RH, `tipo de documento`, documento, fecha_nacimiento) 
  VALUES (null, 'Maira','Bella', 'bella@gmail', '45455', 'f', 'o+', 'c.c', '123999', '2022-04-10')";
  
  ?>

    
   <!--  importar valores de menu  -->
   <script src="../menus/javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- peticion -->
<script src="./javascript/historiaClinica.js"></script>
</body>
</html>