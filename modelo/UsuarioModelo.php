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
    
    private $BaseDeDatosCorrespondiente = "bd_usuario";

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


    public function verificar($nombre,$contra,$TablaCorrespondiente) {
        $sql = "SELECT nombre,contrasena FROM $TablaCorrespondiente ;";
        $conexion =  Conectar::conectarBD($this->BaseDeDatosCorrespondiente);
        $rows = $conexion->query($sql);
        $conexion->close();
        
        while ( $fila = $rows->fetch_row()){
            if ($fila[0] == $nombre && $fila[1] == $contra){
                return TRUE;
            }
        }
        return FALSE;
    }
}
