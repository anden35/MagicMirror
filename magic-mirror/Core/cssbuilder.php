<?php 

class cssbuilder {

    function buildcss($function_name, $cfg){
        echo ('<style>');
        echo ('.' . $function_name . '{');

        foreach ($cfg->css->$function_name as $key=>$value){//values for CSS class
            echo ($key . ':' . $value . ';');
            //echo (array_search($value,(array)$this->json_cfg->css->$function_name) . ':' . $value . ';');
        }
        echo ('}');
        echo ('</style>');

     }
}