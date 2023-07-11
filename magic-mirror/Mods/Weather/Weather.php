<?php

class Weather{

    private $jsonCfg;
    private $cssBuilder;
    private $location;
    private $api_key;
    private $url;
    private $config;
    private $weather_json;
    private $weatherDataArray;
    private $display;
    private $weatherProviderObj;
    private $errorMsg;

    public $weather_alerts_array;


    function __construct($cssBuilder, $cfg){
        $this->jsonCfg = $cfg->buildcfg(get_class($this));
        $this->cssBuilder = $cssBuilder;

        $location = $this->jsonCfg->settings->location;
        $apiKey = $this->jsonCfg->settings->APIinfo->APIkey;

        $this->setDisplay($this->jsonCfg);
        $this->setWeatherProvider($this->jsonCfg);
        include("WeatherProviders/".$this->weatherProvider.".php");

        $weatherProviderObj = new $this->weatherProvider($location, $apiKey );  //needs to be a for each for muilt locations

        $weatherProviderObj->getWeaterData();

        if (null !== ($weatherProviderObj->getErrorMsg())){
            $this->errorMsg = $weatherProviderObj->getErrorMsg();
            print ($this->errorMsg);
            exit();
        }
        $weatherDataObj = $weatherProviderObj->getCollectedWeatherInfo();
        $this->weatherDataArray = $weatherDataObj->getCollectedWeaterDataArray();
        $this->displayWeather();

        }
    private function setWeatherProvider($config){
        $this->weatherProvider = $config->settings->weatherProvider;
    }



    private function setDisplay($config){
        //read in the display file
        include("DisplayThemes/".$config->settings->displayTheme.".php");
    }

    public function setAlerts($weather_json){
        //makes array of descriptions of all alerts
        if ($weather_json->alerts){
            foreach ( $weather_json->alerts as $alert){
                $all_alerts[] = $alert->description;
            }
        $this->weather_alerts_array =  $all_alerts;
        }//Should there be a msg here if there is no alets? like "No alerts at this time"
    }

    public function echoAlertsAsString(){
        if ($this->weather_alerts_array){
            $string_all = implode(" - ",$this->weather_alerts_array);
            echo $string_all;
        }
    }

    public function getAlertsAsString(){
        if ($this->weather_alerts_array){
            $string_all = implode(" - ",$this->weather_alerts_array);
            return $string_all;
        }
    }

    public function displayWeather(){
        //MAKE ALLLLLLLLL THEMES HAVE THIS FUNCATION
        if (null !== ($this->errorMsg)){
            print ($this->errorMsg);
            exit();
        }
        $weatherData = $this->weatherDataArray;
        $this->cssBuilder->buildcss(__FUNCTION__ , $this->jsonCfg);
        echo ('<div class="'. __FUNCTION__ . ' ">');
        display($weatherData);
        echo ('</div>');
    }

    public function displayAlerts(){
        echo('<div color="red" size="6">');
        echo($this->echoAlertsAsString());
        echo('</div>');
    }

}

?>
