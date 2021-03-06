<?php include('../templates/view_cursos_header.php'); ?>
<?php 
include_once '../config/db.php'; 
?>

<?php 
$id = isset($_POST['id'])?$_POST['id']:'';
$conexionDB = BaseDatos::crearInstancia();

$sql = "SELECT * FROM notas WHERE id_est=:id";
$consulta = $conexionDB->prepare($sql);
$consulta->bindParam(':id',$id);
$consulta->execute();
$datos = $consulta->fetch(PDO::FETCH_ASSOC);
// print_r($datos);
print_r($id);
echo "<br>";

?>

<h2>Formulario de edicion</h2>

<button class="btn_volver" value="" onclick="location.href='view_notas.php'">Volver a tabla</button>

<div class="form-editar-alumno">
  <form action="view_actualizado.php" method="post">
    <span>Estudiante: <?php echo $datos['id_est']; ?></span><br>
    <br><span>Primera Fase:</span><br>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <span>Trabajo 1 </span>
    <input type="text" name="trabajo_1c1" id="trabajo_1c1" value="<?php echo $datos['trabajo_1_c1'] ?>">
    <span>Trabajo 2 </span>
    <input type="text" name="trabajo_2c1" id="trabajo_2c1" value="<?php echo $datos['trabajo_2_c1'] ?>">
    <span>Trabajo 3 </span>
    <input type="text" name="trabajo_3c1" id="trabajo_3c1" value="<?php echo $datos['trabajo_3_c1'] ?>">
    <span>Trabajo 4 </span>
    <input type="text" name="trabajo_4c1" id="trabajo_4c1" value="<?php echo $datos['trabajo_4_c1'] ?>">
    <span>Trabajo 5 </span>
    <input type="text" name="trabajo_5c1" id="trabajo_5c1" value="<?php echo $datos['trabajo_5_c1'] ?>">
    <span>Trabajo 6 </span>
    <input type="text" name="trabajo_6c1" id="trabajo_6c1" value="<?php echo $datos['trabajo_6_c1'] ?>">
    <span>Continua 1 </span>
    <input type="text" name="continua_1" id="continua_1" value="<?php echo $datos['continua_1'] ?>" readonly>
    <span>Parcial 1 </span>
    <input type="text" name="parcial_1" id="parcial_1" value="<?php echo $datos['parcial_1'] ?>">
    <br><span>Segunda Fase: </span><br>
    <span>Trabajo 1 </span>
    <input type="text" name="trabajo_1c2" id="trabajo_1c2" value="<?php echo $datos['trabajo_1_c2'] ?>">
    <span>Trabajo 2 </span>
    <input type="text" name="trabajo_2c2" id="trabajo_2c2" value="<?php echo $datos['trabajo_2_c2'] ?>">
    <span>Trabajo 3 </span>
    <input type="text" name="trabajo_3c2" id="trabajo_3c2" value="<?php echo $datos['trabajo_3_c2'] ?>">
    <span>Trabajo 4 </span>
    <input type="text" name="trabajo_4c2" id="trabajo_4c2" value="<?php echo $datos['trabajo_4_c2'] ?>">
    <span>Trabajo 5 </span>
    <input type="text" name="trabajo_5c2" id="trabajo_5c2" value="<?php echo $datos['trabajo_5_c2'] ?>">
    <span>Trabajo 6 </span>
    <input type="text" name="trabajo_6c2" id="trabajo_6c2" value="<?php echo $datos['trabajo_6_c2'] ?>">
    <span>Continua 2 </span>
    <input type="text" name="continua_2" id="continua_2" value="<?php echo $datos['continua_2'] ?>" readonly>
    <span>Parcial 2 </span>
    <input type="text" name="parcial_2" id="parcial_2" value="<?php echo $datos['parcial_2'] ?>">
    <br><span>Tercera Fase:</span><br>
    <span>Trabajo 1 </span>
    <input type="text" name="trabajo_1c3" id="trabajo_1c3" value="<?php echo $datos['trabajo_1_c3'] ?>">
    <span>Trabajo 2 </span>
    <input type="text" name="trabajo_2c3" id="trabajo_2c3" value="<?php echo $datos['trabajo_2_c3'] ?>">
    <span>Trabajo 3 </span>
    <input type="text" name="trabajo_3c3" id="trabajo_3c3" value="<?php echo $datos['trabajo_3_c3'] ?>">
    <span>Trabajo 4 </span>
    <input type="text" name="trabajo_4c3" id="trabajo_4c3" value="<?php echo $datos['trabajo_4_c3'] ?>">
    <span>Trabajo 5 </span>
    <input type="text" name="trabajo_5c3" id="trabajo_5c3" value="<?php echo $datos['trabajo_5_c3'] ?>">
    <span>Trabajo 6 </span>
    <input type="text" name="trabajo_6c3" id="trabajo_6c3" value="<?php echo $datos['trabajo_6_c3'] ?>">
    <span>Continua 3 </span>
    <input type="text" name="continua_3" id="continua_3" value="<?php echo $datos['continua_3'] ?>" readonly>
    <span>Parcial 3</span>
    <input type="text" name="parcial_3" id="parcial_3" value="<?php echo $datos['parcial_3'] ?>" >
    <br>
    <button type="submit" id="btnGuardar" name="guardar" >Guardar Cambios</button>
  </form>
</div>
<br>

<script>
  let btn= document.getElementById("btnGuardar"); // Encuentra el elemento "p" en el sitio
  btn.onclick = muestraAlerta; // Agrega funci??n onclick al elemento
  function muestraAlerta(evento) {
    alert("Se guardaron los datos!!!");
  }
</script>

<?php include('../templates/view_asistencia_footer.php'); ?>