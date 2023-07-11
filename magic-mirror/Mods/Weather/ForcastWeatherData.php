<?php
    class ForcastWeatherData {

    public $temperatureHighC;
    public $temperatureHighF;
    public $temperatureLowC;
    public $temperatureLowF;
    public $apparentTemperatureHighC;
    public $apparentTemperatureHighF;
    public $apparentTemperatureLowC;
    public $apparentTemperatureLowF;
    public $humidity;
    public $condition;
    public $windSpeed;
    public $windDirection;
    public $precipitationChance;
    public $icon;





    /**
     * Get the value of Temperature High
     *
     * @return mixed
     */
    public function getTemperatureHighC()
    {
        return $this->temperatureHighC;
    }

    /**
     * Set the value of Temperature High
     *
     * @param mixed temperatureHighC
     *
     * @return self
     */
    public function setTemperatureHighC($temperatureHighC)
    {
        $this->temperatureHighC = $temperatureHighC;

        return $this;
    }

    /**
     * Get the value of Temperature High
     *
     * @return mixed
     */
    public function getTemperatureHighF()
    {
        return $this->temperatureHighF;
    }

    /**
     * Set the value of Temperature High
     *
     * @param mixed temperatureHighF
     *
     * @return self
     */
    public function setTemperatureHighF($temperatureHighF)
    {
        $this->temperatureHighF = $temperatureHighF;

        return $this;
    }

    /**
     * Get the value of Temperature Low
     *
     * @return mixed
     */
    public function getTemperatureLowC()
    {
        return $this->temperatureLowC;
    }

    /**
     * Set the value of Temperature Low
     *
     * @param mixed temperatureLowC
     *
     * @return self
     */
    public function setTemperatureLowC($temperatureLowC)
    {
        $this->temperatureLowC = $temperatureLowC;

        return $this;
    }

    /**
     * Get the value of Temperature Low
     *
     * @return mixed
     */
    public function getTemperatureLowF()
    {
        return $this->temperatureLowF;
    }

    /**
     * Set the value of Temperature Low
     *
     * @param mixed temperatureLowF
     *
     * @return self
     */
    public function setTemperatureLowF($temperatureLowF)
    {
        $this->temperatureLowF = $temperatureLowF;

        return $this;
    }

    /**
     * Get the value of Apparent Temperature High
     *
     * @return mixed
     */
    public function getApparentTemperatureHighC()
    {
        return $this->apparentTemperatureHighC;
    }

    /**
     * Set the value of Apparent Temperature High
     *
     * @param mixed apparentTemperatureHighC
     *
     * @return self
     */
    public function setApparentTemperatureHighC($apparentTemperatureHighC)
    {
        $this->apparentTemperatureHighC = $apparentTemperatureHighC;

        return $this;
    }

    /**
     * Get the value of Apparent Temperature High
     *
     * @return mixed
     */
    public function getApparentTemperatureHighF()
    {
        return $this->apparentTemperatureHighF;
    }

    /**
     * Set the value of Apparent Temperature High
     *
     * @param mixed apparentTemperatureHighF
     *
     * @return self
     */
    public function setApparentTemperatureHighF($apparentTemperatureHighF)
    {
        $this->apparentTemperatureHighF = $apparentTemperatureHighF;

        return $this;
    }

    /**
     * Get the value of Apparent Temperature Low
     *
     * @return mixed
     */
    public function getApparentTemperatureLowC()
    {
        return $this->apparentTemperatureLowC;
    }

    /**
     * Set the value of Apparent Temperature Low
     *
     * @param mixed apparentTemperatureLowC
     *
     * @return self
     */
    public function setApparentTemperatureLowC($apparentTemperatureLowC)
    {
        $this->apparentTemperatureLowC = $apparentTemperatureLowC;

        return $this;
    }

    /**
     * Get the value of Apparent Temperature Low
     *
     * @return mixed
     */
    public function getApparentTemperatureLowF()
    {
        return $this->apparentTemperatureLowF;
    }

    /**
     * Set the value of Apparent Temperature Low
     *
     * @param mixed apparentTemperatureLowF
     *
     * @return self
     */
    public function setApparentTemperatureLowF($apparentTemperatureLowF)
    {
        $this->apparentTemperatureLowF = $apparentTemperatureLowF;

        return $this;
    }

    /**
     * Get the value of Humidity
     *
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set the value of Humidity
     *
     * @param mixed humidity
     *
     * @return self
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get the value of Condition
     *
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set the value of Condition
     *
     * @param mixed condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get the value of Wind Speed
     *
     * @return mixed
     */
    public function getWindSpeed()
    {
        return $this->windSpeed;
    }

    /**
     * Set the value of Wind Speed
     *
     * @param mixed windSpeed
     *
     * @return self
     */
    public function setWindSpeed($windSpeed)
    {
        $this->windSpeed = $windSpeed;

        return $this;
    }

    /**
     * Get the value of Wind Direction
     *
     * @return mixed
     */
    public function getWindDirection()
    {
        return $this->windDirection;
    }

    /**
     * Set the value of Wind Direction
     *
     * @param mixed windDirection
     *
     * @return self
     */
    public function setWindDirection($windDirection)
    {
        $this->windDirection = $windDirection;

        return $this;
    }

    /**
     * Get the value of Precipitation Chance
     *
     * @return mixed
     */
    public function getPrecipitationChance()
    {
        return $this->precipitationChance;
    }

    /**
     * Set the value of Precipitation Chance
     *
     * @param mixed precipitationChance
     *
     * @return self
     */
    public function setPrecipitationChance($precipitationChance)
    {
        $this->precipitationChance = $precipitationChance;

        return $this;
    }

    /**
     * Get the value of Icon
     *
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of Icon
     *
     * @param mixed icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

}
