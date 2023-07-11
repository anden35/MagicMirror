<?php
class CurrentWeatherData {
    public $currentTemperatureF;//TODO: make this into an array???
    public $currentTemperatureC;
    public $currentApparentTemperature;
    public $currentHumidity;
    public $currentCondition;
    public $currentWindSpeed;
    public $currentWindDirection;
    public $currentIcon;

    /**
     * Get the value of Current Temperature
     *
     * @return mixed
     */
    public function getCurrentTemperatureF()
    {
        return $this->currentTemperatureF;
    }

    /**
     * Set the value of Current Temperature
     *
     * @param mixed currentTemperatureF
     *
     * @return self
     */
    public function setCurrentTemperatureF($currentTemperatureF)
    {
        $this->currentTemperatureF = $currentTemperatureF;

        return $this;
    }

    /**
     * Get the value of Current Temperature
     *
     * @return mixed
     */
    public function getCurrentTemperatureC()
    {
        return $this->currentTemperatureC;
    }

    /**
     * Set the value of Current Temperature
     *
     * @param mixed currentTemperatureC
     *
     * @return self
     */
    public function setCurrentTemperatureC($currentTemperatureC)
    {
        $this->currentTemperatureC = $currentTemperatureC;

        return $this;
    }

    /**
     * Get the value of Current Apparent Temperature
     *
     * @return mixed
     */
    public function getCurrentApparentTemperature()
    {
        return $this->currentApparentTemperature;
    }

    /**
     * Set the value of Current Apparent Temperature
     *
     * @param mixed currentApparentTemperature
     *
     * @return self
     */
    public function setCurrentApparentTemperature($currentApparentTemperature)
    {
        $this->currentApparentTemperature = $currentApparentTemperature;

        return $this;
    }

    /**
     * Get the value of Current Humidity
     *
     * @return mixed
     */
    public function getCurrentHumidity()
    {
        return $this->currentHumidity;
    }

    /**
     * Set the value of Current Humidity
     *
     * @param mixed currentHumidity
     *
     * @return self
     */
    public function setCurrentHumidity($currentHumidity)
    {
        $this->currentHumidity = $currentHumidity;

        return $this;
    }

    /**
     * Get the value of Current Condition
     *
     * @return mixed
     */
    public function getCurrentCondition()
    {
        return $this->currentCondition;
    }

    /**
     * Set the value of Current Condition
     *
     * @param mixed currentCondition
     *
     * @return self
     */
    public function setCurrentCondition($currentCondition)
    {
        $this->currentCondition = $currentCondition;

        return $this;
    }

    /**
     * Get the value of Current Wind Speed
     *
     * @return mixed
     */
    public function getCurrentWindSpeed()
    {
        return $this->currentWindSpeed;
    }

    /**
     * Set the value of Current Wind Speed
     *
     * @param mixed currentWindSpeed
     *
     * @return self
     */
    public function setCurrentWindSpeed($currentWindSpeed)
    {
        $this->currentWindSpeed = $currentWindSpeed;

        return $this;
    }

    /**
     * Get the value of Current Wind Direction
     *
     * @return mixed
     */
    public function getCurrentWindDirection()
    {
        return $this->currentWindDirection;
    }

    /**
     * Set the value of Current Wind Direction
     *
     * @param mixed currentWindDirection
     *
     * @return self
     */
    public function setCurrentWindDirection($currentWindDirection)
    {
        $this->currentWindDirection = $currentWindDirection;

        return $this;
    }

    /**
     * Get the value of Current Icon
     *
     * @return mixed
     */
    public function getCurrentIcon()
    {
        return $this->currentIcon;
    }

    /**
     * Set the value of Current Icon
     *
     * @param mixed currentIcon
     *
     * @return self
     */
    public function setCurrentIcon($currentIcon)
    {
        $this->currentIcon = $currentIcon;

        return $this;
    }
}
?>
