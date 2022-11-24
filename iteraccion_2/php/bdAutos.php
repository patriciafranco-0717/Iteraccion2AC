<?php
$host ="localhost";
 $user ="root";
 $pass ="";
 $db="autos_colombia";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $nombre=$_POST['nombre'];
 $cedula=$_POST['cedula'];
 $direccion=$_POST['direccion'];
 $telefono=$_POST['telefono'];
 $placa=$_POST['placa'];
 $modelo=$_POST['modelo'];
 $color=$_POST['color'];
 $estado=$_POST['estado'];

 $sql="INSERT INTO datos VALUES (' $nombre','$cedula','$direccion','$telefono','$placa','$modelo','$color','$estado') ";

 $ejecutar=mysqli_query($con,$sql);

 if(!$ejecutar){
    echo "Error";
 }else {
    echo " Datos almacenados exitosamente <br><a href='usuarios.html'>Volver</a>";
  }


 ?>