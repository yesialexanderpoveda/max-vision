<?php


class Login
{


    public $id, $password, $rol;


    // Validation rol

    public function validate($pa, $id_rol, $id_rolUser)
    {
        $this->rol = $pa;
        if ($pa == "Optometra" && $id_rol == $id_rolUser) {
            header("Location: http://localhost:8080/maxvision/sessionOptometra/optometra.php", true, 301);
        } else if ($pa == "Cliente" && $id_rol == $id_rolUser) {
            header("Location: http://localhost:8080/maxvision/sessionCliente/cliente.php", true, 301);
        } else if ($pa == "Auxiliar" && $id_rol == $id_rolUser) {
            header("Location: http://localhost:8080/maxvision/sessionAuxiliar/auxiliar.php", true, 301);
        }else if ($pa == "Admin" && $id_rol == $id_rolUser) {
            header("Location: http://localhost:8080/maxvision/sessionAdministrador/admin.php", true, 301);
        }else{
            session_destroy();
            header("Location: http://localhost:8080/maxvision/login.php", true, 301);
        }
    }


    // Validation parameters 

    public function login($pa_id, $pa_pass, $pa_rol)
    {

        

        
        if ($pa_id && $pa_pass) {

          if(empty($pa_rol)){
            $pa_rol =  "Admin";
          }    

            $this->id = $pa_id;
            $this->password = $pa_pass;
            require "db.php";

            $sql = "SELECT * FROM usuarios, roles 
            WHERE roles.nom_rol = '$pa_rol'
            AND usuarios.documento = $pa_id 
            AND usuarios.password = '$pa_pass'
            ";

            $result = $con->query($sql);
               /* echo $result->num_rows; */
               
            if ($result->num_rows>0) {

                while ( $fila=$result->fetch_assoc() )  {
                    // 54:38 
                    /*  print_r($fila); */
                /*     echo "id: " . $fila['nombre'] . $fila['password'] . $fila['rol'] ."<br/>"; */
                session_start();
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['rol'] = $pa_rol; 
                $_SESSION['idRol'] = $fila['idroles'];
                $_SESSION['idRolUser'] = $fila['roles_idroles'];

            
                self::validate($pa_rol, $fila['idroles'], $fila['roles_idroles']);
                    
                }
                

            } else {
                echo "<p>A ocurrido un error vuelve a intentarlo</p>";
            }

            /* 
                        this->valide() */
        } else {

            echo "Values undefined";
        }
    }
}