<?php 
include 'C:\xampp\htdocs\interfaces\conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
   <div class ="container">
    <div class ="row">
        <?php 
        $sql = "SELECT D.imagen,
        P.nom_producto,
        P.precio
         from productos AS P left join
         descripciones as D 
         on D.productos_idproductos = P.idproductos
          where  `categoria_id_categoria` = 1";
          //categoria debe ser 3
$resultado = mysqli_query($conex, $sql);

while ($consult = mysqli_fetch_array($resultado)) {
  ?>
  <div class='card';>
 <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($consult['imagen']);?>"/>
 <div class='card-body'>
   <h5 class='card-title'><?php echo $consult['nom_producto'] ?></h5>
   <p class='card-text'><?php echo $consult['precio'] ?></p>

 </div>
</div>

<?php   
}
?>
    </div>
   </div> 

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>
<!--       <a href='#' class='btn btn-primary'>sumit</a>  cambiar por funcion onclick -->
<!-- la imagen debe ir guardada en la base de datos -->