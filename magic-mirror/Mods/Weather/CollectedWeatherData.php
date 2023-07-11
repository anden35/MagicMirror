<?php
class CollectedWeatherData
{
    //TODO: need to add an knots/kmh for wind speed
    public $weatherData;

    function __construct(){
        include 'ForcastWeatherData.php';
        include 'CurrentWeatherData.php';
        //this creates the var as a blank object
        $this->weatherData = new stdClass();
        $this->weatherData->currentWeather = new CurrentWeatherData();
        $this->weatherData->day0Forcast = new ForcastWeatherData();
        $this->weatherData->day1Forcast = new ForcastWeatherData();
        $this->weatherData->day2Forcast = new ForcastWeatherData();
    }

    public function getCollectedWeaterDataArray(){
        $returnArray['currentWeather'] = (array) $this->weatherData->currentWeather;
        $returnArray['day0Forcast'] = (array) $this->weatherData->day0Forcast;
        $returnArray['day1Forcast'] = (array) $this->weatherData->day1Forcast;
        $returnArray['day2Forcast'] = (array) $this->weatherData->day2Forcast;
        return $returnArray;
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

}
?>
