<?php
/**
 * Description of RedireccionFormulario
 *
 * @author arlopez
 */
class RedireccionFormulario {
    
    public function redireccionar($control,$url){
        
        $archivo=fopen("log.txt",'a+');
        fwrite($archivo,"RedireccionFormulario: Redireccionando\n");
        fwrite($archivo,"Control: $control \n");
        
        $url=$url."/payment/action/paymentgatewayuniversal-data?control=$control";
        
        header("Location: $url");
        
    }
    
}

?>
