<?php

 echo "<html lang='es'>" ;
 echo '<br>LLEgaste hasta aqui';

$nombre      = $_POST['nombre'];
$contrasena  = $_POST['contrasena'];

 
//require_once __DIR__ . '../../modelo/ModelosCliente/ClienteModelo.php';

//$ObjCli = new ClienteModelo();

if (isset($_POST['btn_ingresar'])) {
    
    //if($ObjCli->verificarUsuario($nombre, $contrasena)){
        //
        //require_once __DIR__ . '../../vista/VistasCliente/ClienteInterfazform.php';
    //}else{
        echo "<br>Usuario o contrasena incorrecto";
    //}
}

