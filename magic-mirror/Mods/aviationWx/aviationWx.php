

<?php
//Class to pull avation data from aviationweather.gov base on input stations

class aviationWx {
  private $stations;
  private $json_cfg;
  private $cssbuilder;

 function __construct($cssbuilder, $cfg){
  $this->json_cfg = $cfg->buildcfg(get_class($this));
  $this->cssbuilder = $cssbuilder;
  $needed_stations=[];
  foreach ($this->json_cfg->stations as $inputStations) {
       $needed_stations[]= $inputStations->station;
  }
    $this->stations = implode(',',$needed_stations);
 }

  
   //show meter for listed stations. 
  public function metar() {
    $this->cssbuilder->buildcss(__FUNCTION__ , $this->json_cfg);
    $metar_url = 'https://aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&stationString=' .$this->stations. '&hoursBeforeNow=1';
    $metar_xml = file_get_contents($metar_url);
    //$metar_xml = file_get_contents('data.xml', true);//dont want to get pinging the server :] 
    $metar_arry = new SimpleXMLElement($metar_xml);
    echo ('<div class="'. __FUNCTION__ . ' ">');
    foreach($metar_arry->data->METAR as $station){
      echo ($station->raw_text) . '<br />';
    }
    echo ('</div>');
  }
}



