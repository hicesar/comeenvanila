<?php
require_once '../model/modelComentarios.php'
extract($_POST);
if(isset ($btnCorreo) and isset($to) and $to!=''){
    // crear objeto
    $objContacto= new Comentario();
    //setear 
    $objContacto->setTo($to);
    $objContacto->setAsunto($asunto);
    $objContacto->setMensaje($mensaje);
    //metodo para insertar a base de datos 
    $objContacto->guaradarMensaje();
    $objContacto->enviarMensaje();
} 
else{
    echo "no se introdujo ningun valor";
} 


?>