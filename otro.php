<?php
    require 'vendor/autoload.php';
    require 'controladores/ctrl_api.php';
    require_once('config/config.php');
    $pedido= BODY_API.KEY_API.'&req=tables&league=177&group=1';    
    infoGrupo(pedir($pedido));
?>