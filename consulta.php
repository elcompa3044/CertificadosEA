<?php
$server = "localhost";
$usuario ="root";
$contraseña="";
$bd ="registro_certificados";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error de conexion intentelo de nuevo");

$tabla ="SELECT * FROM tabla";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consulta de registros</title>
        <meta name="viewport" content="width=device-width,
        user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
        minimum-scale=1.0">

        <link rel="stylesheet" href="css/estilo tabla.css">
</head>
<body>
        <body bgcolor="#DEB887">
            <div class="image-fondo cabecera"></div>
        <br>
        <br>
    <div class="container-table">
        <div class="table__title"> DATOS DE USUARIOS REGISTRADOS AL DIA DE HOY</div>
        <div class="table__header"> ID </div>
        <div class="table__header"> NOMBRE  </div>
        <div class="table__header"> EMAIL  </div>
        <div class="table__header"> FECHA DE REGISTRO  </div>
        <?php $resultado = mysqli_query($conexion,$tabla);
       while($row=mysqli_fetch_assoc($resultado)){?>
       <div class="table__item"><?php echo $row["id"];?></div>
       <div class="table__item"><?php echo $row["nombre"];?></div>
       <div class="table__item"><?php echo $row["email"];?></div>
       <div class="table__item"><?php echo $row["fecha_reg"];?></div>
       <?php } mysqli_free_result($resultado);?>
       </div>
       </body>
       </html>






