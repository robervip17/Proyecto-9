<?php
require "./../src/Usuario.php";
  $j=new Usuario();
  $j2=new Usuario();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertar();
      }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <h2>Nuevo Usuario</h2>
    <form class="formNBA" action="registro.php" method="post">
      <div class="grupoFormItem">
        <label for="id"></label>
        <span class="formLabel">id </span>
        <input type="text" name="id" value="">
      </div>
      <div class="grupoFormItem">
        <label for="nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos</span>
        <input type="text" name="apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="edad"></label>
          <span class="formLabel">Edad </span>
        <input type="text" name="edad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="curso"></label>
        <span class="formLabel">Curso</span>
        <input type="text" name="curso" value="">
      </div>
      <input type="submit" name="" value="insertar">
    </form>
    <?php  include "./assets/footer.php"; ?>
  </body>
</html>
