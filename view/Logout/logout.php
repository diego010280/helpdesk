<?php
 require_once("../../config/conexion.php");
 session_destroy();
 $ruta=new Conectar();
 $rutafinal= $ruta->ruta();
 //echo $rutafinal;
 header("Location:" . $rutafinal . "index.php");
 exit();
 ?>