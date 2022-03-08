<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$fecha=date("Y-m-d H:i:s");
$mysqli_link = mysqli_connect("localhost", "root", "", "registro_certificados");
 
if (mysqli_connect_errno())
{
    printf("MySQL error: %s", mysqli_connect_error());
    exit;
}
 
$insert_query = "INSERT INTO tabla( nombre, email , fecha_reg) VALUES ('$nombre','$email','$fecha')";
  //Regresar a pagina principa//
If (mysqli_query($mysqli_link, $insert_query)) {
    $host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'actividad 4.html';
header("Location: http://$host$uri/$extra");
exit;
}

mysqli_close($mysqli_link);
?>
