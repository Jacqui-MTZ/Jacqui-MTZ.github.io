<?php
include("conexion.php");

$nombre=$_post['nombre'];
$paterno=$_post['apaterno'];
$materno=$_post['amaterno'];
$email=$_post['email'];
$estado=$_post['estado'];


//INSERTAR DATOS
$query="INSERT INTO Alumnos1(Nombre,Apaterno,Amaterno,Email,Estado)
VALUES ('$nombre','$paterno','$materno','$email','$estado')";


//VERIFICAR SI SE EJECUTO

$resultado=$conexion->query($query);
if($resultado) {
   echo "Datos insertados correctamente";
}
else{
    echo "No se insertaron los datos";
}

?>
