<?php

require_once('libs/smarty/Smarty.class.php');
require_once('config/config.php');
 
class Template{
     
    private $_smarty;
     
    function __construct(){
        $this->_smarty = new Smarty();
         
        global $template_config;
        $this->_smarty->template_dir = $template_config['template_dir'];
        $this->_smarty->compile_dir = $template_config['compile_dir'];
        $this->_smarty->cache_dir = $template_config['cache_dir'];
        $this->_smarty->config_dir = $template_config['config_dir'];
    }

    function mostrar($template, $data = array()){
    	foreach($data as $key => $value){
	        $this->_smarty->assign($key, $value);
	    }
	    $this->_smarty->display($template . '.tpl');
	}


	function asignar($clave,$valor){
		$this->_smarty->assign($clave, $valor);
	}
}

?>