<?php
require("./conexion/Conexion.php");
class CrudProducto
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function CrearProducto()
    { 
    }

    public function LeerProducto($id)
    {
    }

    public function ActualizarProducto($id)
    {
    }

    public function EliminarProducto($id)
    {
    }
}

?>