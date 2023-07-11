<?php
//https://darksky.net/dev
class DarkSky {

    private $apiKey;
    private $location;
    private $weatherData;
    private $errorMsg;

    public $collectedWeatherInfo;


    public function __construct($inLocation, $inAPIKey){
        include (dirname(__FILE__)."/../CollectedWeatherData.php");

        $this->setApiKey($inAPIKey);
        $this->setLocation($inLocation);

    }
    /**
     * Get the value of Api Key
     *
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the value of Api Key
     *
     * @param mixed apiKey
     *
     * @return self
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get the value of Location
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of Location
     *
     * @param mixed location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }


    /**
     * Get the value of Weather Data
     *
     * @return mixed
     */
    public function getWeatherData()
    {
        return $this->weatherData;
    }

    /**
     * Set the value of Weather Data
     *
     * @param mixed weatherData
     *
     * @return self
     */
    public function setWeatherData($weatherData)
    {
        $this->weatherData = $weatherData;

        return $this;
    }


    /**
     * Get the value of Error Msg
     *
     * @return mixed
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * Set the value of Error Msg
     *
     * @param mixed errorMsg
     *
     * @return self
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;

        return $this;
    }


    public function getCollectedWeatherInfo(){
        return $this->collectedWeatherInfo;
    }

    public function getWeaterData(){
        //$url = 'E:\www\MagicMirror\Mods\Weather\darkskyWeatherEx.json'; //TODO: take one guess............
        $url = 'https://api.darksky.net/forecast/'.$this->apiKey.'/'.$this->location;
        $headers = @get_headers($url);
        //if (!file_exists($url))

        if(strpos($headers[0],'404') !== false) {
            $this->setErrorMsg("Cannot get weather data.");
        } else {
            $this->weatherData = json_decode(file_get_contents($url));
            $this->extractCurrentWeaterData($this->weatherData);
        }
    }

    private function extractCurrentWeaterData($inWeatherData){
        $collectedInfo = new CollectedWeatherData();
        $currentWeather = $inWeatherData->currently;
        $collectedInfo->weatherData->currentWeather->setCurrentTemperatureF(round($currentWeather->temperature));
        $collectedInfo->weatherData->currentWeather->setCurrentTemperatureC($this->convertFtoC($currentWeather->temperature));
        $collectedInfo->weatherData->currentWeather->setCurrentApparentTemperature(round($currentWeather->apparentTemperature));
        $collectedInfo->weatherData->currentWeather->setCurrentHumidity($currentWeather->humidity);
        $collectedInfo->weatherData->currentWeather->setCurrentCondition($currentWeather->summary);
        $collectedInfo->weatherData->currentWeather->setCurrentWindSpeed($currentWeather->windSpeed);
        $collectedInfo->weatherData->currentWeather->setCurrentWindDirection($currentWeather->windBearing);
        $collectedInfo->weatherData->currentWeather->setCurrentIcon($currentWeather->icon);

        foreach (range(0,2) as $number){
            $varName = "day".$number."Forcast";
            $forcastWeatherData =  $inWeatherData->daily->data[$number];

            $collectedInfo->weatherData->$varName->setTemperatureHighF(round($forcastWeatherData->temperatureHigh));
            $collectedInfo->weatherData->$varName->setTemperatureLowF(round($forcastWeatherData->temperatureLow));
            $collectedInfo->weatherData->$varName->setApparentTemperatureHighF(round($forcastWeatherData->apparentTemperatureHigh));
            $collectedInfo->weatherData->$varName->setApparentTemperatureLowF(round($forcastWeatherData->apparentTemperatureLow));
            $collectedInfo->weatherData->$varName->setHumidity($forcastWeatherData->humidity);
            $collectedInfo->weatherData->$varName->setCondition($forcastWeatherData->summary);
            $collectedInfo->weatherData->$varName->setWindSpeed($forcastWeatherData->windSpeed);
            $collectedInfo->weatherData->$varName->setWindDirection($forcastWeatherData->windBearing);
            $collectedInfo->weatherData->$varName->setPrecipitationChance(round($forcastWeatherData->precipProbability*100));
            $collectedInfo->weatherData->$varName->setIcon($forcastWeatherData->icon);
            $collectedInfo->weatherData->$varName->setTemperatureHighC($this->convertFtoC($forcastWeatherData->temperatureHigh));
            $collectedInfo->weatherData->$varName->setTemperatureLowC($this->convertFtoC($forcastWeatherData->temperatureLow));
            $collectedInfo->weatherData->$varName->setApparentTemperatureHighC($this->convertFtoC($forcastWeatherData->apparentTemperatureHigh));
            $collectedInfo->weatherData->$varName->setApparentTemperatureLowC($this->convertFtoC($forcastWeatherData->apparentTemperatureLow));
        }
        $this->collectedWeatherInfo = $collectedInfo;
    }

    private function convertFtoC($inTemp){
        $convert = round(($inTemp-32)*5/9);
        return $convert;
    }






}
