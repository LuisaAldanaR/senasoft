<?php

    include("../templates/header.php");

    $id = $_GET['id'];

    require_once(__DIR__ . "/../../model/Cita.php");
    require_once(__DIR__ . "/../../controller/CitaController.php");

    $controlador = new CitaController();

    if(isset($_POST['txtId']))
    {
        $cita = new Cita($_POST['txtId'], $_POST['txtNombreMascota'], $_POST['txtFecha'],  $_POST['txtHora'], $_POST['txtSintomas'], $_POST['txtNombreDuenio'], $_POST['txtNumeroDuenio']);
        $controlador->delete($cita);
    }
    $registro = $controlador->show($id);
?>


<div class="card">
    <div class="card-header">
        Eliminar Cita
    </div>

    <div class="card-body">
        <form action="" method="POST">

            <div class="mb-3">
                <label for="" class="form-label">ID:</label>
                <input type="text" value="<?php echo $registro['id']; ?>" readonly
                    class="form-control" name="txtId" id="txtId" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="txtNombreMascota" class="form-label">Nombre de mascota:</label>
                <input type="text" value="<?php echo $registro['nombreMascota']; ?>" readonly
                    class="form-control" name="txtNombreMascota" id="txtNombreMascota" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtFecha" class="form-label">Fecha de cita:</label>
              <input type="date" value="<?php echo $registro['fecha']; ?>" readonly
                class="form-control" name="txtFecha" id="txtFecha" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtHora" class="form-label">Hora de cita:</label>
              <input type="time" value="<?php echo $registro['hora']; ?>" readonly
                class="form-control" name="txtHora" id="txtHora" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtMotivo" class="form-label">Motivo de la cita:</label>
              <input type="text" value="<?php echo $registro['motivo']; ?>" readonly
                class="form-control" name="txtMotivo" id="txtMotivo" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNombreDuenio" class="form-label">Nombre del dueño:</label>
              <input type="text" value="<?php echo $registro['nombreDuenio']; ?>" readonly
                class="form-control" name="txtNombreDuenio" id="txtNombreDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNumeroDuenio" class="form-label">Contacto del dueño:</label>
              <input type="tel" value="<?php echo $registro['numeroDuenio']; ?>" readonly
                class="form-control" name="txtNumeroDuenio" id="txtNumeroDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <br />  
            <div class="card-footer text-muted">
                ¿Está seguro que desea eliminar esta cita?
            </div>
            <br />  
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="index.php" class="btn btn-success">Cancelar</a>
        </form>
        
    </div>
</div>


<?php
    include("../templates/footer.php")
?>