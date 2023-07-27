<?php
    include( "../templates/header.php" );
?>

<!-- Contenido de la pagina -->
<div class="card">
    <div class="card-header">
        Agregar cita
    </div>
    <div class="card-body">
        <form action="store.php" method="POST">
        
            <div class="mb-3">
            <label for="txtNombreMascota" class="form-label">Nombre de mascota:</label>
            <input type="text"
                class="form-control" name="txtNombreMascota" id="txtNombreMascota" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtFecha" class="form-label">Fecha de cita:</label>
              <input type="date"
                class="form-control" name="txtFecha" id="txtFecha" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtHora" class="form-label">Hora de cita:</label>
              <input type="time"
                class="form-control" name="txtHora" id="txtHora" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtMotivo" class="form-label">Motivo de la cita:</label>
              <input type="text"
                class="form-control" name="txtMotivo" id="txtMotivo" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNombreDuenio" class="form-label">Nombre del dueño:</label>
              <input type="text"
                class="form-control" name="txtNombreDuenio" id="txtNombreDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="txtNumeroDuenio" class="form-label">Contacto del dueño:</label>
              <input type="tel"
                class="form-control" name="txtNumeroDuenio" id="txtNumeroDuenio" aria-describedby="helpId" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>

        </form>
    </div>
</div>

<?php
    include( "../templates/footer.php" );
?>