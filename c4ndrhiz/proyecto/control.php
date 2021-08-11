<?php


if (isset($_REQUEST['btn_guardar'])) {

    include ("../conexion/conexion.php");

    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $carrera=$_POST['carrera'];
    $cuatrimestre=$_POST['cuatrimestre'];

    $sql="INSERT INTO alumnos (fecha, nombre, apellidos, carrera, cuatrimestre) VALUES('$fecha', '$nombre', '$apellidos', '$carrera', '$cuatrimestre')";
    $ejecutar=mysqli_query($conexion, $sql);

    if ($ejecutar) {
        header("Location:index.php");
    }
}


if (isset($_REQUEST['btn_actualizar'])) {

    include ("../conexion/conexion.php");

    $id=$_POST['id'];
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $carrera=$_POST['carrera'];
    $cuatrimestre=$_POST['cuatrimestre'];

    $sql="UPDATE alumnos SET fecha='$fecha', nombre='$nombre', apellidos='$apellidos', carrera='$carrera', cuatrimestre='$cuatrimestre' WHERE id_alumno ='$id'";
    $ejecutar=mysqli_query($conexion, $sql);

    if ($ejecutar) {
        header("Location:index.php");
    }
}

if (isset($_REQUEST['btn_eliminar'])) {
    include ("../conexion/conexion.php");

    $id=$_POST['id'];

    $sql="DELETE FROM alumnos WHERE id_alumno='$id'";
    $ejecutar=mysqli_query($conexion, $sql);

    if ($ejecutar) {
        header("Location:index.php");
    }
}
?>