<?php

if (isset($_POST['btn_cliente'])) {
     //echo "<br>Presiono el boton cliente";
     require_once __DIR__ . '/../vista/VistasCliente/Clienteform.php';     
}


if (isset($_POST['btn_cajero'])) {
       require_once __DIR__ . '/../vista/VistasCajero/CajeroLogin.php'; 

}

if (isset($_POST['btn_venta'])) {
    echo "<br>Presiono el boton venta ";
}

