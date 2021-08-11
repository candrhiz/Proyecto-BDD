<?php

date_default_timezone_set("America/Mexico_City");
$fecha_actual=date("Y-m-d H:i:s");
include ("../conexion/conexion.php");
@$id_alumno=$_GET['id'];
$consulta="SELECT * FROM alumnos WHERE id_alumno='$id_alumno'";
$ejecutar=mysqli_query($conexion, $consulta);

while($row=mysqli_fetch_array($ejecutar)){

     $id =$row[0];
     $fecha=$row[1];
     $nombre=$row[2];
     $apellidos=$row[3];
     $carrera=$row[4];
     $cuatrimestre=$row[5];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO</title>

    <script src="../librerias/materialize/jquery-3.4.0.min.js"></script>
    <script src="../librerias/materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../librerias/materialize/css/materialize.min.css">

    <script>
      $(document).ready(function() {
         id= $("#id_alumnos").val();

         if (id>0) {
             $("#frm_registrar").hide();
         }

         if (id=="") {
             $("#frm_actualizar").hide();
         }
      });
    </script>

</head>
<body>

<input type="hidden" name="id_alumnos" id="id_alumnos" value="<?php echo $id_alumno; ?>">
<div class="row">

    <!-- Formulario Registro-->
    <div class="col l4" style="position: absolute; top: 15%;" id="frm_registrar">
        <h5 class="blue-text">REGISTRO DE ALUMNOS</h5><br><br>
        <form action="control.php" method="POST" accept-charset="utf-8">
            
        <div class="input-field col l5">
        <input type="text" name="fecha" value="<?php echo $fecha_actual?>" placeholder="">
        <label for="fecha">Fecha</label>
        </div>

        <div class="input-field col l12">
        <input type="text" name="nombre" value="" placeholder="">
        <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col l12">
        <input type="text" name="apellidos" value="" placeholder="">
        <label for="apellidos">Apellidos</label>
        </div>

        <div class="input-field col l4">
        <input type="text" name="carrera" value="" placeholder="">
        <label for="carrera">Carrera</label>
        </div>

        <div class="input-field col l4">
        <input type="text" name="cuatrimestre" value="" placeholder="">
        <label for="cuatrimestre">Cuatrimestre</label>
        </div>

        <div class="input-field">
        <button type="submit" class="blue btn-small" name="btn_guardar">Guardar</button>
        
        </div>
    </form>
    </div>

    <!-- Tabla-->
    <div class="col l7 offset-l5" style="position: absolute; top: 15%;">
         
    <table>
             <h5 class="blue-text">LISTA</h5><br><br>
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Fecha Registro</th>
                     <th>Nombe</th>
                     <th>Apellidos</th>
                     <th>Carrera</th>
                     <th>Cuatrimestre</th>
                     <th></th>
                 </tr>
             </thead>

             <?php 
               include ("../conexion/conexion.php");
            $sql="SELECT * FROM alumnos";
            $ejecutar=mysqli_query($conexion, $sql);
            while ($fila=mysqli_fetch_array($ejecutar)) {



            
            ?>
            }
            ?>
             <tbody>
                 <tr>
                     <td><?php echo $fila[0];?></td>
                     <td><?php echo $fila[1];?></td>
                     <td><?php echo $fila[2];?></td>
                     <td><?php echo $fila[3];?></td>
                     <td><?php echo $fila[4];?></td>
                     <td><?php echo $fila[5];?></td>
                     <td><a href="index.php?id=<?php echo $fila[0];?>" class="btn btn-small">Editar</a></td>
                 </tr>
             </tbody>

             <?php
            }
             ?>
         </table>
    </div>
</div>

 <!-- Formulario Actualizar-->
 <div class="row">
     <div class="col l4" style="position: absolute; top: 15%;" id="frm_actualizar">
        <h5 class="blue-text">EDITAR INFORMACION</h5><br><br>
        <form action="control.php" method="POST" accept-charset="utf-8">
            
        <div class="input-field col l5">
        <input type="text" name="fecha" value="<?php echo $fecha ?>" placeholder="">
        <label for="fecha">Fecha</label>
        </div>

        <div class="input-field col l12">
        <input type="text" name="id" value="<?php echo $id ?>" placeholder="">
        <label for="id">Id</label>
        </div>

        <div class="input-field col l12">
        <input type="text" name="nombre" value="<?php echo $nombre ?>" placeholder="">
        <label for="nombre">Nombre</label>
        </div>

        <div class="input-field col l12">
        <input type="text" name="apellidos" value="<?php echo $apellidos ?>" placeholder="">
        <label for="apellidos">Apellidos</label>
        </div>

        <div class="input-field col l4">
        <input type="text" name="carrera" value="<?php echo $carrera ?>" placeholder="">
        <label for="carrera">Carrera</label>
        </div>

        <div class="input-field col l4">
        <input type="text" name="cuatrimestre" value="<?php echo $cuatrimestre ?>" placeholder="">
        <label for="cuatrimestre">Cuatrimestre</label>
        </div>

        <div class="input-field col l6">
        <button type="submit" class="blue btn-small" name="btn_actualizar">Actualizar</button>
        
        </div>

        <div class="input-field col l6">
        <button type="submit" class="red accent-darken-4 btn-small" name="btn_eliminar">Eliminar</button>
        
        </div>

        <div class="input-field col l6">
        <a href="index.php" class="blue btn-small" name="btn_regresar">Regresar</a>
        
        </div>
    </form>
  </div>
    </div>

</body>
</html> 