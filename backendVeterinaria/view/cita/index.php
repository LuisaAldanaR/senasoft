<?php
    include( "../templates/header.php" );

    require_once(__DIR__ . "/../../controller/CitaController.php" );

    $controlador = new CitaController( );
    $registros = $controlador->index( );
?>

<div class="card">
    <div class="card-header">
        <h2 align="center">Lista de Citas</h2>
        <a class="btn btn-primary" href="create.php" role="button">Agregar Cita</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <?php 
                if(!empty($registros)):
            ?>
                    <table class="table table-striped table-hover table-borderless table-primary table-middle">
                        <thead class="table-light">
                            
                            <tr>
                                <th>ID</th>
                                <th>Nombre de mascota</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Motivo de la cita</th>
                                <th>Nombre del dueño</th>
                                <th>Contacto del dueño</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php 
                                if( !empty($registros)):
                                    foreach( $registros as $fila ):
                            ?>
                                        <tr class="table">
                                            <td scope="row"><?php echo $fila[ 'id' ]; ?></td>
                                            <td><?php echo $fila[ 'nombreMascota' ]; ?></td>
                                            <td><?php echo $fila[ 'fecha' ]; ?></td>
                                            <td><?php echo $fila[ 'hora' ]; ?></td>
                                            <td><?php echo $fila[ 'motivo' ]; ?></td>
                                            <td><?php echo $fila[ 'nombreDuenio' ]; ?></td>
                                            <td><?php echo $fila[ 'numeroDuenio' ]; ?></td>
                                            <td><?php echo $fila[ 'estado' ]; ?></td>
                                            <td>
                                                <a href="show.php?id=<?php echo $fila[ 'id' ]; ?>" class="btn btn-success">Ver</a> 
                                                <a href="edit.php?id=<?php echo $fila[ 'id' ]; ?>" class="btn btn-warning">Editar</a> 
                                                <a href="delete.php?id=<?php echo $fila[ 'id' ]; ?>" class="btn btn-danger">Eliminar</a> 
                                            </td>
                                        </tr>
                            <?php 
                                    endforeach;
                                endif;
                            ?>
                            
                        </tbody>
                    </table>
            <?php else: ?>
                    <p> No hay registros disponibles.</p>
                    <a href="create.php" class="btn btn-info">Crear Registro</a>
            <?php endif; ?>
        </div> 
    </div>
</div>

<?php
    include( "../templates/footer.php" );
?>
