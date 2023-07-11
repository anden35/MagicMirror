<?php
class specialDays {
    
    private $json_cfg;
    private $cssbuilder;
    private $todayDate;
    private $daysThatAreMarked=array();

     

         
    function __construct($cssbuilder, $cfg){
        $this->json_cfg = $cfg->buildcfg(get_class($this));
        $this->cssbuilder = $cssbuilder;
        #date format Mon dd ie Jan 01
        $this->todayDate = date('M d');
        //make array of days that are set
        $this->daysThatAreMarked = $this->markDays();
        //check todays date with mark days
        $this->dateChecker($this->daysThatAreMarked);
     }
    //return array of mark days
    private function markDays(){
        
        $tempArr=array();
        foreach ($this->json_cfg->markDays as $name){
            $tempArr[]=$name->date;
        }
        return $tempArr;
    }
     
     
    //check to see if today is a date set on cfg file 
    private function dateChecker($markDays){
        $today = $this->todayDate;
        if (in_array($this->todayDate, $markDays)) {
            #make changes if true
            $this->makeChanges($this->json_cfg->markDays->$today);
            
        }
    }
    
    private function makeChanges($specialDay){
        echo ('<style> body {background-image: url("Mods/bgChanger/images/'.$specialDay->bg . '");background-repeat: no-repeat;} </style>');
        echo ($specialDay->msg);
    }
}
 