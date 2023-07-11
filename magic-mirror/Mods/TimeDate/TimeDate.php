<?php

class TimeDate {
    private $json_cfg;
    private $css_builder;
    private $display_theme;
    
    function __construct($css_builder, $cfg){
        $this->json_cfg = $cfg->buildcfg(get_class($this));
        $this->css_builder = $css_builder;
        $this->setDisplay($this->json_cfg);
     }
     
    private function setDisplay($config){
        //read in the display file
        $this->display_theme = $config->settings->displayTheme;
        echo ('<script type="text/javascript" src="Mods/TimeDate/DisplayThemes/' .  $this->display_theme . '.js"></script>');
    }
     
     public function displayClock(){
          $this->css_builder->buildcss(__FUNCTION__ , $this->json_cfg);
          echo ('<div class="'. __FUNCTION__ . ' ">');
          ?>

        <script type="text/javascript" src="Mods/TimeDate/TimeDate.js" ></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script>
        $(document).ready(function(){
            setInterval(function(){
                var time_date_array = TimeDate.getTimeDate();
                display(time_date_array);
            },1000);
        });
        

         </script>
         <div id="clock"></div>
        </div>
     <?php
          
     } 
     
}




?>