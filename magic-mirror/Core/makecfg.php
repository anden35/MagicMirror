<?php

class makecfg {



    function buildcfg($name){
        return json_decode(file_get_contents( 'Mods/' . $name . '/'. $name . ".cfg", true));
    }
}
