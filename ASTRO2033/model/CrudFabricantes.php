<?php
require("./conexion/Conexion.php");
class CrudFabricantes
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function CrearFabricante()
    {
    }

    public function LeerFabricante($id)
    {
    }

    public function ActualizarFabricante($id)
    {
    }

    public function EliminarFabricante($id)
    {
    }
}

?>