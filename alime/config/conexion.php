<?php
  
  $dbhost = "localhost";
  $dbname = "encuesta_ambiental";
  $dbuser = "root";
  $dbpass = "";
  
  $conexion = new mysqli("localhost", "root", "", "encuesta_ambiental","3306");

  /* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
  }
?>