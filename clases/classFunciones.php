<?php

class CRUD
{
    public $obj;

    public function __construct()
    {
        require_once("../clases/classConexion.php");
        $conexion = new conexionMysql();
        $this -> obj = $conexion -> conexion();
    }

    public function muestrameRoles()
    {
        $sentencia = ("SELECT * FROM usuarios");
        $preparar = $this -> obj -> query($sentencia);
        $resultados = $preparar -> fetchAll(PDO::FETCH_OBJ);
        for ($i=0; $i <= count($resultados) ; $i++) {
            
            print $resultados[$i]->rol;
        }
    
    }

    public function definirUsuario()
    {
        $sentencia = ("INSERT INTO  usuarios (usu, pass,rol) VALUES ('2','pass',2)");
        $preparar = $this -> obj -> prepare($sentencia);
        $ejecutar=$preparar->execute(); 
        if($ejecutar)
        {
            echo "Añadido";
        }
        else
        {
            echo "nada";
        }
    
    }

}



?>