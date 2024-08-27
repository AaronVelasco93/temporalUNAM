<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

//Get la Q parametro para la URL
$q = $_REQUEST["q"];


//Conexion para sistema

$con = mysqli_connect('localhost','root','123456','qrs');
//$con = mysqli_connect('localhost','u676715632_aragon','icoAragonUnam22','u676715632_ingenieria');

// Validando conexion
if (mysqli_connect_errno())
{
 echo "Conexion sin Exito en MySQL: " . mysqli_connect_error();
}
// lookup all hints from array if $q is different from ""
if ($q !="") { //validacion de un registro
    $result=mysqli_query($con,"SELECT * FROM logs WHERE name='$q'");
    $rowcount=mysqli_num_rows($result);

    if($rowcount==0){
    $ret=mysqli_query($con,"INSERT INTO `logs`(name,Time) VALUES ('$q',NOW())");
  
     if($ret)
      {
      echo '<div class="alert alert-success"><p><strong>Exito!</strong>Registro realizado</div>'+date('l jS \of F Y h:i:s A');
        ?>

<?php }
else
{

}
}else{
//echo 'employee is already registered';  
echo '<div class="alert alert-success"><p><strong>Exito!</strong> Registro Realizado</p></div>';
echo date('l jS \of F Y h:i:s A');

  }

}

// Output "no suggestion" if no hint was found or output correct values
//echo $hint === "" ? "no suggestion" : $hint;
?>