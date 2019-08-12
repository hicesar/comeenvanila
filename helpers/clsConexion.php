<?php
require_once'../helpers/config.php';
class Conexion{
    //variable
    private $_objConectar;
    
    
    function __construct(){
        try{ $this->_objConectar= new mysqli(SERVIDOR,USUARIO,CONTRASENA,BASE_DATOS);
        }catch (Exception $e){echo "error en la conexion".$e->getMessage().'<br>';}
    }
    
    public function ejecutarConsulta($consulta){
      $resultado = $this-> _objConectar->query($consulta);
        return $resultado;  
    }
public function cerrarConexion(){
    $this->_objConectar->close();
}
}

?>