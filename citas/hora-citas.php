<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="mensaje.php" method="post">

        <?php
        include 'C:\xampp\htdocs\interfaces\conexion.php';

        $fechaActual = $_REQUEST['date'];

        // Consulta SQL para obtener los eventos futuros
        $sql = "SELECT * FROM horario WHERE fecha = '$fechaActual' ORDER BY fecha";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $sql);

        echo '<p>Horario</p>';
        // Crear el elemento select
        echo '<select name="horarios">';

        // Recorrer los resultados y generar las opciones de selección
        while ($row = mysqli_fetch_assoc($resultado)) {
            $idHorario = $row['id_horario'];
            $fecha = $row['fecha'];
            $horas = $row['horas'];
            echo "<option value=\"$idHorario\" name = 'time'>" . $horas . "</option>";
        }

        // Cerrar el elemento select
        echo '</select>';
        ?>
        <p>Consultorio disponible</p>
        <?php
        $sql_con = "SELECT * FROM consultorio";

        $resul = mysqli_query($conex, $sql_con);

        echo '<select name="consultorio">';
        while ($row2 = mysqli_fetch_assoc($resul)) {
            $idConsultorio = $row2['id_consultorio'];
            $direccion = $row2['direccion'];

            echo "<option value=\"$idConsultorio\" name = 'consulting_room'>" . $direccion . "</option>";
        }

        echo '</select>';
        ?>
        <p>Optometra</p>
        <?php
        $sql_cona = "SELECT U.id_usuarios, U.nombre, C.id_consultorio 
        FROM `usuarios` AS U 
        JOIN consultorio AS C 
        ON C.usuarios_id_usuarios = U.id_usuarios;";

        $result = mysqli_query($conex, $sql_cona);

        echo '<select name="optometrist">';
        while ($row3 = mysqli_fetch_assoc($result)) {
            $idUsuario = $row3['id_usuarios'];
            $nombreUsuario = $row3['nombre'];
            $idConsultorio2 = $row3['id_consultorio'];
            echo "<option value=\"$idUsuario\" >" . $nombreUsuario . "</option>";
        }
        echo '</select>';
        ?>
        <p></p>
        <?php

        echo '<input type="submit" value="next step">';


        // Liberar memoria del resultado
        mysqli_free_result($resultado);

        // Cerrar la conexión
        mysqli_close($conex);



        ?>

    </form>
</body>

</html>