<?php

include("conexionTIP.php");
$con=conectar();

if(isset($_GET['tipo_doc'])) {
  $tipo_doc = $_GET['tipo_doc'];
  $query = "DELETE FROM tipodoc WHERE tipo_doc='$tipo_doc'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: tipodoc.php"); 
}

?>