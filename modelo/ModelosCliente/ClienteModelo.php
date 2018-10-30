<?php

require_once __DIR__ . '/../UsuarioModelo.php';

class ClienteModelo extends UsuarioModelo{

    private $direccion;
    private $TablaCorrespondiente = "clientes";
    
    public function setDireccion($direc) {
        $this->direccion = $direc;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    
    public function verificarUsuario() {                          // Esta funcion revisa si el usuario existe en la tabla
        return parent::verificar($this->TablaCorrespondiente);    //y sabe su contraseña.
    }                                                             //Utiliza la vatiable TablaCorrespondiente para realizar
                                                                  //la consulta en la tabla correcta.
    public function RealizarExtractoByCliente() {
        parent::RealizarExtracto(parent::getNombre());
    }
}                                                                                    