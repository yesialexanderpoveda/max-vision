<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <?php



  $sql = "SELECT D.imagen, D.descripcion, P.nom_producto FROM descripciones AS D 
  JOIN productos AS P
  ON D.productos_idproductos = P.idproductos WHERE P.idproductos = 1";
  $resultado = mysqli_query($conex, $sql);
  $row = mysqli_fetch_assoc($resultado);
  ?>
  <div class='card' style='width: 18rem;'>
  <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($consult['imagen']);?>"/>
        <div class='card-body'>
        <p>descripcion</p>
          <p class='card-text'><?php echo  $row['descripcion'] ?> </p>
          
          <h5 class='card-text'><?php echo  $row['nom_producto'] ?> </h5>
        </div>
      </div>
  

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>