<?php

class Time {
    private $json_cfg;
    private $css_builder;
    
    function __construct($css_builder, $cfg){
        $this->json_cfg = $cfg->buildcfg(get_class($this));
        $this->css_builder = $css_builder;
     }
     
     public function displayClock(){
          $this->css_builder->buildcss(__FUNCTION__ , $this->json_cfg);
          echo ('<div class="'. __FUNCTION__ . ' ">');
          ?>
          


        <script src="Mods/Time/Time.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script>
        $(document).ready(function(){
            setInterval(updateClock, 1000);
        });
         </script>
         <div id="clock"></div>
        </div>
     <?php
          
     } 
     
}




?>