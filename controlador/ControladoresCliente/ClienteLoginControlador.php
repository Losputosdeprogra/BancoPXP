<?php

echo "<html lang='es'>" ;

$nombre      = $_POST['nombre'];
$contrasena  = $_POST['contrasena'];

require_once __DIR__ . '/../../modelo/ModelosCliente/ClienteModelo.php';

$Cliente = new ClienteModelo();
$Cliente->setNombre($nombre);
$Cliente->setContrasena($contrasena);


if (isset($_POST['btn_ingresar'])) {
    
    if($Cliente->verificarUsuario()){
        $Cliente->BorrarTablaSelected();
        $Cliente->SeleccionarUsuarioEnBaseDeDatos();
        require_once  __DIR__ . '/../../vista/VistasCliente/ClienteInterfaz.php';
    }else{
        require_once  __DIR__ . '/../../vista/VistasCliente/Clientelogin.php';      //Vuelve a mostrar la pagina para loguearce
        echo "<br><center>Usuario o contraseña incorrecto. Intenta de nuevo.";
    }
}
