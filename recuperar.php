<?php 
$servername="localhost:3308";
$username="root";
$password="";
$dbname="maxvision4";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {

    die ("error de coneccion" . $conn->connect_error);
}
$correo=$_POST['correo'];
$preg_security=$_POST['preg_security'];
$password=$_POST['password'];

$sql ="select * from usuarios where correo ='$correo' AND preg_security =$preg_security password='$password'";
$resul=mysqli_query($conexion,$sql);

$conn->close();
 

?>