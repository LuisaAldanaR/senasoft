<?php
    require_once("../../model/Cita.php");

    class CitaController {
        //--------------------------------------------------------------------------------------------------------------------
        // Atributos
        //--------------------------------------------------------------------------------------------------------------------

        private $model;
    

        //--------------------------------------------------------------------------------------------------------------------
        // Constructor
        //--------------------------------------------------------------------------------------------------------------------

        public function __construct() {

            require_once("../../model/CitaModel.php");

            $this->model = new CitaModel();
        }

        //--------------------------------------------------------------------------------------------------------------------
        // Métodos
        //--------------------------------------------------------------------------------------------------------------------

        public function insert( Cita $cita )
        {
            // Llamado al recurso del modelo que da solucion a la petición insert desde la vista
            $id = $this->model->insert( $cita );

            // Selecciona el recurso de la vista adecuado para mostrar el resultado
            return ( $id != false ) ? header( "Location:show.php?id=" . $id ) : 
                                      header( "Location:create.php" );
        }


        public function show( $id )
        {
            $registro = $this->model->show( $id );
            return ( $registro != false ) ?  $registro : header( "Location:index.php" );
        }


        public function index( )
        {
            $registros = $this->model->index( );
            return $registros;
        }


        public function update( Cita $cita )
        {
            $id = $this->model->update( $cita );
            return ( $id != false ) ? header( "Location:show.php?id=" . $id ) : 
                                      header( "Location:index.php" );
        }


        public function delete( Cita $cita )
        {
            $resultado = $this->model->delete( $cita );
            return $resultado ? header( "Location:index.php" ) : 
                                header( "Location:show.php?id=" . $cita->getId( ) );
        }

    }
?>