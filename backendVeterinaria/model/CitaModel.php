
<?php

class CitaModel {

    //--------------------------------------------------------------------------------------------------------------------
    // Atributos
    //--------------------------------------------------------------------------------------------------------------------

    private $pdo;

    //--------------------------------------------------------------------------------------------------------------------
    // Constructor
    //--------------------------------------------------------------------------------------------------------------------

    public function __construct() {

        require_once("../../config/DB.php");
        $conexion = new DB("localhost", "veterinaria", "root", "");

        $this->pdo = $conexion->connect();
    }

    //--------------------------------------------------------------------------------------------------------------------
    // Métodos
    //--------------------------------------------------------------------------------------------------------------------

    public function insert(Cita $cita) {

        $statement = $this->pdo->prepare("INSERT INTO cita(nombreMascota, fecha, hora, motivo, nombreDuenio, numeroDuenio, estado) VALUES (:nombreMascota, :fecha, :hora, :motivo, :nombreDuenio, :numeroDuenio, :estado)");
        $statement->bindParam(":nombreMascota", $cita->getNombreMascota());
        $statement->bindParam(":fecha", $cita->getFecha());
        $statement->bindParam(":hora", $cita->getHora());
        $statement->bindParam(":motivo", $cita->getMotivo());
        $statement->bindParam(":nombreDuenio", $cita->getNombreDuenio());
        $statement->bindParam(":numeroDuenio", $cita->getNumeroDuenio());
        $statement->bindParam(":estado", $cita->getEstado());
        
        return ($statement->execute()) ? $this->pdo->lastInsertId() : false;

    }

    public function show($id ) {
        $statement = $this->pdo->prepare( "SELECT * FROM cita WHERE id = :id" );
        $statement->bindParam( ":id", $id );

        return ( $statement->execute( ) ) ? $statement->fetch( ) : false;
    }

    public function index( )
    {
        $statement = $this->pdo->prepare( "SELECT * FROM cita" );
        return ( $statement->execute( ) ) ? $statement->fetchAll( ) : false;
    }

    public function update(Cita $cita ) {
        $statement = $this->pdo->prepare("UPDATE cita SET nombreMascota = :nombreMascota, fecha = :fecha, hora = :hora, motivo = :motivo, nombreDuenio = :nombreDuenio, numeroDuenio = :numeroDuenio, estado = :estado WHERE id = :id");
        $statement->bindParam(":nombreMascota", $cita->getNombreMascota());
        $statement->bindParam(":fecha", $cita->getFecha());
        $statement->bindParam(":hora", $cita->getHora());
        $statement->bindParam(":motivo", $cita->getMotivo());
        $statement->bindParam(":nombreDuenio", $cita->getNombreDuenio());
        $statement->bindParam(":numeroDuenio", $cita->getNumeroDuenio());
        $statement->bindParam(":estado", $cita->getEstado());
        $statement->bindParam(":id", $cita->getId());

        return ($statement->execute()) ? $cita->getId() : false;
    }

    public function delete(Cita $cita ) {

        $statement = $this->pdo->prepare(  "DELETE FROM cita WHERE  id = :id" );
        $statement->bindParam( ":id", $cita->getId( ) );
        return ( $statement->execute( ) ) ? true : false;
        
    }

}
?>