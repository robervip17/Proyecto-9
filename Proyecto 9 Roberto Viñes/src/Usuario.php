<?php
/**
 * Jugador
 */
 require_once "./../src/conexion.php";
class Usuario extends Conexion
{
  public $conexion=null;
  private $nombre;
  private $apellidos;
  private $edad;
  private $curso;

  function __construct()
  {
  }

  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["curso"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido la id";
    }elseif($post["nombre"]==""){
      $error="No has introducido el nombre";
    }elseif($post["apellidos"]==""){
      $error="No has introducido el apellido";
    }elseif($post["edad"]==""){
      $error="No has introducido tu edad";
    }elseif($post["curso"]==""){
      $error="No has introducido tu curso";
    }else {
      $error=false;
      $this->id = $post['id'];
      $this->nombre = $post['nombre'];
      $this->apellidos = $post['apellidos'];
      $this->edad = $post['edad'];
      $this->curso = $post['curso'];
    }
    return $error;
    }

  public function top(){
      $resultado=$this->conexion->query("SELECT * FROM usuario join usuario_juego WHERE nombre='Roberto'");
      return $resultado;
  }
  public function insertar(){
    $consulta="INSERT INTO usuario (id, nombre, apellidos, edad, curso)
                VALUES ($this->id, '$this->nombre', '$this->apellidos', $this->edad, '$this->curso')";
                echo $consulta;
    $this->conexion->query($consulta);
}
public function listarUsuarios(){
    $resultado=$this->conexion->query("SELECT * FROM usuario");
    return $resultado;
}
  public function incrementarPunt(){
    $resultado2=$this->conexion->query("SELECT * FROM usuario_juego where id_usuario=3 && id_juego=1");
    $num_filas=$resultado2->num_rows;
    if ($num_filas==0) {
    $consulta="INSERT INTO usuario_juego (id_usuario, id_juego)
    VALUES (4, 3)";
  $consulta2="INSERT INTO juego (nombre)
    VALUES ('Microrobots')";
      $this->conexion->query($consulta);
      $this->conexion->query($consulta2);
    }
    else {
    $actualizar=$this->conexion->query("UPDATE usuario_juego SET puntuacion=puntuacion+5 where id_usuario=3");
    }
  }
  }


 ?>
