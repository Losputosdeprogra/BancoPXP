<?php

echo "<html lang='es'>" ;

if (isset($_POST['btn_Realizar_extracto'])) {
    require_once __DIR__ . '/../../vista/VistasCajero/RealizarExtracto.php';
}

if (isset($_POST['btn_Realizar_transaccion'])) {
    require_once __DIR__ . '/../../vista/VistasCajero/RealizarTransaccion.php';
}

if (isset($_POST['btn_Crear_cuenta'])) {
    require_once __DIR__ . '/../../vista/VistasCajero/CrearCuenta.php';
}
if (isset($_POST['btn_Registrar_cliente'])) {
    require_once __DIR__ . '/../../vista/VistasCajero/RegistrarCliente.php';
}

