<?php
class quotes {
    
    private $json_cfg;
    private $cssbuilder;

    function __construct($cssbuilder, $cfg){
        
        $this->json_cfg = $cfg->buildcfg(get_class($this));
        $this->cssbuilder = $cssbuilder;
         
         
     }
     
    private function randompicker($max){
        return rand(0,$max);
    }
    
    public function displayquote(){
        $this->cssbuilder->buildcss(__FUNCTION__ , $this->json_cfg);
        echo ('<div class="'. __FUNCTION__ . ' ">');
        $num = $this->randompicker((count($this->json_cfg->quotes)-1));
        echo ('"' . $this->json_cfg->quotes[$num]->quote . '" - ' . $this->json_cfg->quotes[$num]->author);
        echo ('</div>');
    }
  

}