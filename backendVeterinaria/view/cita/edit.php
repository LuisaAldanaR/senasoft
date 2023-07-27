<?php
    include( "../templates/header.php" );

    $id = $_GET[ 'id' ];                            // validar con isset()

    require_once( "../../controller/CitaController.php" );

    $controlador = new CitaController( );
    $registro = $controlador->show( $id );
?>

<!-- Contenido de la pagina -->
<div class="card">
    <div class="card-header">
        Editar cita
    </div>
    <div class="card-body">
        <form action="update.php" method="POST">

            <div class="mb-3">
                <label for="" class="form-label">ID:</label>
                <input type="text" value="<?php echo $registro['id']; ?>" readonly
                    class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="txtNombreMascota" class="form-label">Nombre de mascota:</label>
                <input type="text" value="<?php echo $registro['nombreMascota']; ?>"
                    class="form-control" name="txtNombreMascota" id="txtNombreMascota" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtFecha" class="form-label">Fecha de cita:</label>
              <input type="date" value="<?php echo $registro['fecha']; ?>"
                class="form-control" name="txtFecha" id="txtFecha" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtHora" class="form-label">Hora de cita:</label>
              <input type="time" value="<?php echo $registro['hora']; ?>"
                class="form-control" name="txtHora" id="txtHora" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtMotivo" class="form-label">Motivo de la cita:</label>
              <input type="text" value="<?php echo $registro['motivo']; ?>"
                class="form-control" name="txtMotivo" id="txtMotivo" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNombreDuenio" class="form-label">Nombre del dueño:</label>
              <input type="text" value="<?php echo $registro['nombreDuenio']; ?>"
                class="form-control" name="txtNombreDuenio" id="txtNombreDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNumeroDuenio" class="form-label">Contacto del dueño:</label>
              <input type="tel" value="<?php echo $registro['numeroDuenio']; ?>"
                class="form-control" name="txtNumeroDuenio" id="txtNumeroDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Estado:</label>
                </br>
              <select name="txtEstado" id="txtEstado">
                <option>Asignada</option>
                <option value="En atención" <?php if($registro['estado'] === 'En atención') echo 'selected'; ?>>En atención</option>
                <option value="Completada" <?php if($registro['estado'] === 'Completada') echo 'selected'; ?>>Completada</option>
                <option value="Cancelada" <?php if($registro['estado'] === 'Cancelada') echo 'selected'; ?>>Cancelada</option>
              </select>
              </br>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>

        </form>
    </div>
</div>

<?php
    include( "../templates/footer.php" );
?>