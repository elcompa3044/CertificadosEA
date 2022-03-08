<!DOCTYPE>
<html>
    <head>
        <title> borrado</title>
        <link rel="stylesheet" href="css/STYLE.CSS">
</head>
<body>
<body bgcolor="#DEB887">
<?php
$server = "localhost";
$usuario ="root";
$contraseña="";
$bd ="registro_certificados";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error de conexion intentelo de nuevo");

$id = $_POST['id'];

mysqli_query ($conexion,"DELETE from tabla where id ='$id'")
or die ("Error al eliminar el id selecionado");
mysqli_close($conexion);
echo "Datos eliminados correctamente";

?>
</body>
</html>


