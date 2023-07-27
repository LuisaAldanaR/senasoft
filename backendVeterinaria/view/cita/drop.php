<?php

    require_once( "../../model/Cita.php" );
    require_once( "../../controller/CitaController.php" );

    $nombreMascota = "";      // validar con isset() ?
    $fecha = "";
    $hora = "";
    $motivo = "";
    $nombreDuenio = "";
    $numeroDuenio = "";
    $id = $_POST['txtId'];

    $cita = new Cita( $id, $nombreMascota, $fecha, $hora, $motivo, $nombreDuenio, $numeroDuenio);        // id = 0 porque no sera tenido en cuenta
    $controlador = new CitaController( );

    $controlador->delete( $cita );

?>