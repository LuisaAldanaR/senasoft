<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // Conexión a la base de datos

    $servidor = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $nombreBaseDatos = "veterinaria";

    $conexionDB = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);

    // Consultar datos y recepcionar una clave pk para la consulta
    if(isset($_GET["consultar"])) {
        $sqlCitas = mysqli_query($conexionDB, "SELECT * FROM cita WHERE id = ".$_GET["consultar"]);

        if(mysqli_num_rows($sqlCitas) > 0 ) {
            $citas = mysqli_fetch_all($sqlCitas, MYSQLI_ASSOC);
            echo json_encode($citas);
        }
        else {
            echo json_encode(["success" => 0]);
        }

        exit();
    }
    
    // Borrar un registro y recepcionar una clave pk para el borrado
    if(isset($_GET["borrar"])) {
        $sqlCitas = mysqli_query($conexionDB, "DELETE FROM cita WHERE id = ".$_GET["borrar"]);

        if($sqlCitas) {
            echo json_encode(["success" => 1]);
        }
        else {
            echo json_encode(["success" => 0]);
        }

        exit();
    }

    // Inserta un registro nuevo y recepcionar por método POST los datos del aprendiz
    if(isset($_GET["insertar"])) {
        // Se recepcionan los datos en formato JSON y se guardan en un objeto
        $data = json_decode(file_get_contents("php://input"));
        $nombreMascota = $data->nombreMascota;
        $fecha = $data->fecha;
        $hora = $data->hora;
        $motivo = $data->motivo;
        $nombreDuenio = $data->nombreDuenio;
        $numeroDuenio = $data->numeroDuenio;

        $sqlCitas = mysqli_query($conexionDB, "INSERT INTO cita(nombreMascota, fecha, hora, motivo, nombreDuenio, numeroDuenio) VALUES('$nombreMascota', '$fecha', 
        '$hora', '$motivo', '$nombreDuenio', '$numeroDuenio')");

        if($sqlAprendices) {
            echo json_encode(["success" => 1]);
        }
        else {
            echo json_encode(["success" => 0]);
        }

        exit();
    }

    // Actualiza un registro y recepciona por método POST los datos del aprendiz
    if(isset($_GET["actualizar"])) {
        // Se recepcionan los datos en formato JSON y se guardan en un objeto
        $data = json_decode(file_get_contents("php://input"));
        $id = $_GET["actualizar"];
        $nombreMascota = $data->nombreMascota;
        $fecha = $data->fecha;
        $hora = $data->hora;
        $motivo = $data->motivo;
        $nombreDuenio = $data->nombreDuenio;
        $numeroDuenio = $data->numeroDuenio;
        $estado = $data->estado;

        $sqlCitas = mysqli_query($conexionDB, "UPDATE cita SET nombreMascota = '$nombreMascota', fecha = '$fecha', hora = '$hora', motivo = '$motivo',
                                                                nombreDuenio = '$nombreDuenio', numeroDuenio = '$numeroDuenio', estado = '$estado' WHERE id = $id");

        if($sqlCitas) {
            echo json_encode(["success" => 1]);
        }
        else {
            echo json_encode(["success" => 0]);
        }

        exit();
    }

    // Consultar todos los registros
    $sqlCitas = mysqli_query($conexionDB, "SELECT * FROM cita");

    if(mysqli_num_rows($sqlCitas) > 0 ) {
        $citas = mysqli_fetch_all($sqlCitas, MYSQLI_ASSOC);
        echo json_encode($citas);
    }
    else {
        echo json_encode(["success" => 0]);
    }

    exit();
    
?>