<?php
    class DB 
    {
        private $host;
        private $dbname;
        private $user;
        private $password;

        public function __construct( $host, $dbname, $user, $password ) 
        {
            $this->host = $host;            // "localhost"
            $this->dbname = $dbname;        // "veterinaria"
            $this->user = $user;            // "root"
            $this->password = $password;    // ""
        }

        public function connect( )
        {
            try {
                $conexion = new PDO( "mysql:host=" . $this->host . ";dbname=" . $this->dbname, 
                                     $this->user,
                                     $this->password );
                return $conexion;
            }
            catch( PDOException $e ) {
                return $e->getMessage( );
            }
        }

    }


?>