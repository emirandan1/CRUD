<?php
require("./conexion/Conexion.php");
class CrudRegistro
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function CrearRegistro()
    {
    }

    public function LeerRegistro($id)
    {
    }

    public function ActualizarRegistro($id)
    {
    }

    public function EliminarRegistro($id)
    {
    }
}

?>