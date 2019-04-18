<?php
require "./../src/conexion.php";
require "./../src/Usuario.php";
  $j=new Usuario();
  $j->conectar();
  $listarUsuarios=$j->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./../css/estilos.css">
  </head>
  <body>
    <?php include "./assets/navSup.php"; ?>
    <table border=1 cellpadding=4 cellspacing=0 width="100%">
     <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Apellidos</th>
       <th>Edad</th>
       <th>Curso</th>
     </tr>
     <?php
     foreach ($listarUsuarios as $usuario) {
       echo "<tr>";
       echo "<td>".$usuario['id']."</td>";
       echo "<td>".$usuario['nombre']."</td>";
       echo "<td>".$usuario['apellidos']."</td>";
       echo "<td>".$usuario['edad']."</td>";
       echo "<td>".$usuario['curso']."</td>";
       echo "</tr>";
     }
     ?>
     <?php include "./assets/footer.php"; ?>
  </body>
</html>
