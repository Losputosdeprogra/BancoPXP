<?php
require_once __DIR__ . '/UsuarioModelo.php';

class CajeroModelo extends UsuarioModelo{

   
    private $TablaCorrespondiente = "administradores";
    
    public function verificarUsuario($nombre,$contra) {                         // Esta funcion revisa si el usuario existe en la tabla
        return parent::verificar($nombre,$contra, $this->TablaCorrespondiente); // y sabe su contraseña.
    }                                                                           //Utiliza la vatiable TablaCorrespondeointe para realizar
}                                                                               //la consulta en la tabla correcta

