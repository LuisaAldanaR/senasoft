<?php
    include( "../templates/header.php" );

    $id = $_GET[ 'id' ];                            // validar con isset()

    require_once( "../../controller/CitaController.php" );

    $controlador = new CitaController( );
    $registro = $controlador->show( $id );

?>

<div class="card">
    <div class="card-header">
        Registro de la Cita
    </div>
    <div class="card-body">

        <div class="table-responsive-sm">
            <table class="table table-striped table-hover table-borderless table-primary table-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Dato</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody class="table">
                    <tr class="">
                        <td scope="row">ID:</td>
                        <td><?php echo $registro['id']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Nombre de mascota:</td>
                        <td><?php echo $registro['nombreMascota']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Fecha de la cita:</td>
                        <td><?php echo $registro['fecha']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Hora de la cita:</td>
                        <td><?php echo $registro['hora']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Motivo de la cita:</td>
                        <td><?php echo $registro['motivo']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Nombre del dueño:</td>
                        <td><?php echo $registro['nombreDuenio']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Contacto del dueño:</td>
                        <td><?php echo $registro['numeroDuenio']; ?></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Estado:</td>
                        <td><?php echo $registro['estado']; ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-success">Ir a la página principal</a>
        </div>
        

    </div>
</div>



<?php
    include( "../templates/footer.php" );
?>