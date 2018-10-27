<?php

if (isset($_POST['btn_cliente'])) {
     //echo "<br>Presiono el boton cliente";
     require_once __DIR__ . '/../vista/VistasCliente/Clientelogin.php';     
}

if (isset($_POST['btn_cajero'])) {
    //echo "<br>Esta parte aun no esta implementada lo sentimos";
       require_once __DIR__ . '/../vista/VistasCajero/CajeroLogin.php'; 
}

if (isset($_POST['btn_venta'])) {
    echo "<br>Presiono el boton venta ";
}

