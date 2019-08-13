<?php
require_once '../helpers/clsConexion.php'
class comentario{
    
    private $destinatario;
    private $asunto;
    private $mensaje;
    
    
    function __construct (){
        $this->destinatario='';
         $this->asunto='';
         $this->mensaje='';
    }
    
    public function setTo($to){
         $this->destinatario=$to;
    }
     public function setAsunto($asunto){
         $this->asunto=$asunto;
    }
     public function setMensaje($mensaje){
         $this->destinatario=$mensaje;
    }
         public function getMensaje(){
         return $this->mensaje;
    }
           public function getAsunto(){
         return $this->asunto;
    }
           public function getTo(){
         return $this->to;
    }
    
   public function guardarMensaje(){
       $sql="INSERT INTO comentarios (destinatario, asunto, mensaje) VALUES ('".$this->getTo()"','".$this->getAsunto()"','".$this->getMensaje()"')";
       $resultato=$this->aplicarQry($sql);
       $r=1;
       return $r;
   }
    
    public function enviarMensaje(){
    $para=$his->getTo();
    $titulo=$this->getAsunto();
    $mensaje=$this->getMensaje();
    $cabeceras= 'From:irisjanethutl@gmail.com'.'\r\n"'.'replayto:irisjanethutl@gmial.com'."\r\n".'x-Mailer:PHP/'.phpversion();
        mail($para,$titulo,$mensaje,$cabeseras);
        
    }
    
    public function aplicarQry($sql){
        $objConectar=new Conexion();
        $resultado=$objetoConectar->ejecutarConsulta($sql);
        $objConectar=cerrarConexion();
        return $resultado; 
    }
    
}
?>