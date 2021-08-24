<?php

$conexion = mysqli_connect("localhost","root","", "pactica");

if ($conexion){
    echo 'conexion exitosa';
}

else{
    echo 'error al conectar';
}

?>