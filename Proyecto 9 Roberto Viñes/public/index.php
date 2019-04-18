<?php
session_start();
 	if (!isset($_SESSION['nombre']) == '') {
  header('Location: /carpeta/login.php');
}
require "./../src/conexion.php";
require "./../src/Usuario.php";
  $j=new Usuario();
  //$j->setServerName("www.myserver.com");
  $j->conectar();
  $listarTop=$j->top();
  $j->incrementarPunt()
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>
    <div id="nav"><?php include "./assets/navSup.php"; ?></div>
    Información usuario en línea:
    <table border=1 cellpadding=4 cellspacing=0 width="100%">
     <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Puntuacion</th>
     </tr>
     <?php
     foreach ($listarTop as $usuarios) {
       echo "<tr>";
       echo "<td>".$usuarios['id']."</td>";
       echo "<td>".$usuarios['nombre']."</td>";
       echo "<td>".$usuarios['puntuacion']."</td>";
       echo "</tr>";
     }
     ?>
   </table>
    <form>
      <br>
     Siguiente fila
     <input type="text" id="fila" value="">
     Siguiente columna
     <input type="text" id="columna" value="">
     <button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button>
     <br><br>
     Movimientos realizados
     <input type="text" id="movimientosRealizados1" value="" disabled=”disabled” >
     Num movimientos
     <input type="text" id="numMovimientos" value="" disabled=”disabled”>
     <br><br>
     Mensajes
     <input type="text" id="mensajes" value="" disabled=”disabled”>
    <script type="text/javascript" src="./js/codigo.js">
    </script>
    <div id="footer"><?php include "./assets/footer.php"; ?></div>
  </body>
</html>
