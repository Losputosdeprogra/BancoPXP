<?php

 echo "<html lang='es'>" ;

$nombre      = $_POST['nombre'];
$contrasena  = $_POST['contrasena'];

 
require_once __DIR__ . '/../../modelo/ModelosCliente/ClienteModelo.php';

$ObjCli = new ClienteModelo();

if (isset($_POST['btn_ingresar'])) {
    
    if($ObjCli->verificarUsuario($nombre, $contrasena)){
        require_once __DIR__ . '/../../vista/VistasCliente/ClienteInterfaz.php';
    }else{
        require_once __DIR__ . '/../../vista/VistasCliente/Clientelogin.php';  
        echo "<br>Usuario o contrasena incorrecto. Intenta de nuevo.";
    }
}
