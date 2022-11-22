<?php 
    class conexionMysql
    {
        public $conexion;

        public function __construct()
        {
            try
            {
                $this -> conexion = new PDO("mysql:server=localhost;dbname=esqueleto","root",""); 
            } 
            catch ( PDOException  $error) 
            {
            echo $error -> getMessage();
            }

        }

        public function conexion()
        {
            return $this -> conexion;
        }
    }
?>