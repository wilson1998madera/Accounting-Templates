<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Meta name="viewport" contest="width=device-wind, initial-scale=1.0">
    <title>Registrate</title>
    <style type="text/css">


    table {
        border: solid 5px #7e7c7C;
        border-collapse: collapse;

    }

    th,h1 {
        background-color: #00FFFF;
    }

    td,
    th{
        border: solid 3px #7e7c7c;
        padding: 2px
        text-align: center;
    }

    </style>
</head>
<body>

</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host,$user,$pass);

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha_nacimiento"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $departamento = $_POST["departamento_ciudad"];
}
if(!connection)
       {
        echo "No se ha podido conectar con el servidor" . mysqli_error();
       }

       else
       {
           echo "<b><h3>Hemos conectado al servidor</h3></b>";
       }

       $datab ="lay_tacones_plataformas3";

       $db = mysqli_select_db($connection,$datab);
     
       if (!$db)
       {
           echo "No se ha podido encontar la Tabla";
       }
       else
       {
           echo "<h3>Tabla seleccionada:</h3";
       }
       
       if(isset($_POST["nombre"])){
       $instruccion_SQL = "INSERT INTO clientes (nombre,fecha_nacimiento, correo, telefono, direccion, departamento_ciudad)
       VALUES  ('$nombre','$fecha','$correo','$telefono','$direccion','$departamento')"; }

    $resultado = mysqli_query($connection,$instruccion_SQL);

    $consulta = "SELECT *FROM clientes ";
       
$result = mysqli_query($connection,$consulta);
if(!$result)
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Fecha N.</th></h1>";
echo "<th><h1>Correo</th></h1>";
echo "<th><h1>Telefono</th></h1>";
echo "<th><h1>Direccion</th></h1>";
echo "<th><h1>Departamento</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td><h2>" . $colum['nombre']. "</td></h1>";
    echo "<td><h2>" . $colum['fecha_nacimiento']. "</td></h1>";
    echo "<td><h2>" . $colum['correo']. "</td></h1>";
    echo "<td><h2>" . $colum['telefono']. "</td></h1>";
    echo "<td><h2>" . $colum['direccion']. "</td></h1>";
    echo "<td><h2>" . $colum['departamento_ciudad']. "</td></h1>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection);

echo'<a href="loggin.html"> Volver Atras</a>';

?>















