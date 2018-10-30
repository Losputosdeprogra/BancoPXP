<?php
/**
 * Description of UsuarioModelo
 *
 * @author ZABALA
 */
require_once("ConectarBD.php");

class UsuarioModelo {
    
    private $id_cliente;
    private $nombre;
    private $telefono;
    private $email;
    private $contrasena;

    public function __construct($nom="",$tel="",$em="",$cont="") {
        $this->id_cliente    = 0;
        $this->nombre       = $nom;
        $this->telefono     = $tel;
        $this->email        = $em;
        $this->contrasena   = $cont;
    }       
    public function setIdCliente($idCli) {
        $this->idCliente = $idCli;
    }
    public function getIdCliente() {
        return $this->id_cliente;
    }
    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setTelefono($tel) {
        $this->telefono = $tel;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setContrasena($cont) {
        $this->contrasena = $cont;
    }
    public function getContrasena() {
        return $this->contrasena;
    }



    public function verificar($TablaCorrespondiente) {
        $sql = "SELECT nombre,contrasena FROM $TablaCorrespondiente;";
        $conexion =  Conectar::conectarBD($this->BaseDeDatosCorrespondiente);

        $rows = $conexion->query($sql);
        $conexion->close();
        
        while ( $fila = $rows->fetch_row()){
            if ($fila[0] == $this->nombre && $fila[1] == $this->contrasena){
                return TRUE;
            }
        }
        return FALSE;
    }
    public function RealizarExtracto() {
    $nombreDelCliente = (string)$this->nombre;
    echo $nombreDelCliente;
    $sql1 = "SELECT cuentas.id_cuenta FROM cuentas,bd_usuario.clientes c WHERE c.nombre = '$nombreDelCliente' AND cuentas.id_cuenta = c.id_cliente";
    $conexion1 =  Conectar::conectarBD("bd_finanzas");
    $CuentaDelCliente = $conexion1->query($sql1);
    $conexion1->close();

    $CuentaDelCliente = $CuentaDelCliente->fetch_row();
    $CuentaDelCliente= (string)$CuentaDelCliente[0];

    $sql = "SELECT fecha,hora,tipo,cuenta_origen,cuenta_destino,monto FROM transacciones WHERE cuenta_origen = $CuentaDelCliente OR cuenta_destino = $CuentaDelCliente";
    $conexion =  Conectar::conectarBD("bd_finanzas");
    $rows = $conexion->query($sql);
    $conexion->close();
    return $rows;
}
    
    public function SeleccionarUsuarioEnBaseDeDatos() {
        $sql = "UPDATE `clientes` SET `selected` = b'1' WHERE clientes.nombre = '$this->nombre';";
        $conexion =  Conectar::conectarBD("bd_usuario");
        $conexion->query($sql);
        $conexion->close();
    }
    public function DesSeleccionarUsuarioEnBaseDeDatos() {
        $sql = "UPDATE `clientes` SET `selected` = b'0' WHERE clientes.nombre = '$this->nombre';";
        $conexion =  Conectar::conectarBD("bd_finanzas");
        $conexion->query($sql);
        $conexion->close();
    }
    public function ObtenerUsuarioSeleccionado() {
        $sql = "SELECT nombre FROM clientes WHERE selected = '1';";
        $conexion =  Conectar::conectarBD("bd_finanzas");
        $nombre=$conexion->query($sql);
        $conexion->close();
        
        $nombre= $nombre[0];
        
        return $nombre;
    }
}
