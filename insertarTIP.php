<?php
include("conexionTIP.php");
$con=conectar();

$tipo_doc=$_POST['tipo_doc'];
$nom_doc=$_POST['nom_doc'];


$sql="INSERT INTO tipodoc values('$tipo_doc','$nom_doc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tipodoc.php");
    
}else {
}
?>