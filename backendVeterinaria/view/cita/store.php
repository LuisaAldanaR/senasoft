<?php 
    require_once( "../../model/Cita.php" );
    require_once( "../../controller/CitaController.php" );

    $nombreMascota = $_POST['txtNombreMascota'];      // validar con isset() ?
    $fecha = $_POST['txtFecha'];
    $hora = $_POST['txtHora'];
    $motivo = $_POST['txtMotivo'];
    $nombreDuenio = $_POST['txtNombreDuenio'];
    $numeroDuenio = $_POST['txtNumeroDuenio'];

    $cita = new Cita( 0, $nombreMascota, $fecha, $hora, $motivo, $nombreDuenio, $numeroDuenio);        // id = 0 porque no sera tenido en cuenta
    $controlador = new CitaController( );

    $controlador->insert( $cita );
?>