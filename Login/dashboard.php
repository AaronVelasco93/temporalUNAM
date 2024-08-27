<?php
require 'conexion.php';
session_start();
$usuario= $_SESSION['usermane'];



if (!isset($usuario)){

    header("location: login.php");
}else {
    mysqli_set_charset($conexion,'utf8'); 
    $q="SELECT * FROM logs";    
    $consulta= $conexion->query($q);
?>
  


  <!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    
    </head>
        
<body>

<h1 style="text-align:center" >Usuarios registrados</h1>

<div class="row" style="margin-top:50px">
        <div class="col s6 offset-s3">



<table style="width:100%; border:2px">
<thead>
    
    <tr>
    <!--seccion A-->
    <th>Nombre</th>
	<th>Fecha</th>
	
    </tr>
</thead>
    

    <?php 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['Time']; ?></td>
   
    </tr>
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
    
</table>
<br><br>

<a style="right:inherit"  class="waves-effect waves-light btn" href="./session_destroy.php">Salir</a>
</div>
</div>

    <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
</body>
</html>


  <?php

}


?>
