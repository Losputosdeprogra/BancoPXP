<?php

require_once __DIR__ . '/../UsuarioModelo.php';;

class ClienteModelo extends UsuarioModelo{

    private $direccion;
    
    public function setDireccion($direc) {
        $this->direccion = $direc;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function verificarUsuario($nombre,$contra) {
    $sql = "SELECT nombre,contrasena FROM clientes;";
    return parent::verificar($nombre, $contra,$sql);
    }
}