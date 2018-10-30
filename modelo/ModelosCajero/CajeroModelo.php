<?php
require_once __DIR__ . '/../UsuarioModelo.php';

class CajeroModelo extends UsuarioModelo{

   
    private $TablaCorrespondeinte = "cajeros";
    
    public function verificarUsuario($nombre,$contra) {                         // Esta funcion revisa si el usuario existe en la tabla
        return parent::verificar($nombre,$contra, $this->TablaCorrespondeinte); //y sabe su contraseña.
    }                                                                           //Utiliza la vatiable TablaCorrespondiente para realizar
                                                                                //la consulta en la tabla correcta.
    public function RealizarExtractoByCajero($nombreDelCliente) {
        parent::RealizarExtracto($nombreDelCliente);
    }
}
