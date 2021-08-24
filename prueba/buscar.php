<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h2>Buscar</h2>
    

    <table border="2">
        <thead>
        <tr><th colspan="6" >MATERIAL</th>
        </tr></thead>
        <TBODY><TR>
            <td>ID MATERIAL</td>
            <td>NOMBRE</td>
            <td>MARCA</td>
            <td>MODELO</td>
            
        </TR>
    <?php 
     include("prueba\conexion.php");
     $nombre=$_REQUEST['nombre']
     //consulta
     ($query)="SELECT * FROM material WHERE nombre='$nombre'";
     //ejecutar consulta
     $resultado=$conexion->query($query);
     while($row=$resultado->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['id_material']; ?> </td>
        <td><?php echo $row['nombre']; ?> </td>
        <td><?php echo $row['marca']; ?> </td>
        <td><?php echo $row['modelo']; ?> </td>
        </tr>
    <?php?>
     }
</TBODY>
    </table>
    </center>
</body>
</html>