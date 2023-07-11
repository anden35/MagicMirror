

<?php

    function display($inWeatherData){
        $weatherData = $inWeatherData;
        ?>
        <style>
            .main_container {
                width:300px;
            }
            .icon {
                float: left;
                max-width: 160px;
                margin: 0;
                padding-right: 5;
            }
            .text {
                    margin-left: 50px;
                    padding-top: .5em;
                    overflow: hidden;
            }
        </style>
        <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js"></script>
        <script>
            var skycons = new Skycons({"color": "white"});
        </script>
        <div class="main_container">
        <hr><br />
        <div class="icon">
        <canvas id="currentIcon" width="50" height="50"></canvas>
        <?php printf('<script>
            skycons.add("currentIcon", "%s");
         </script>', $weatherData['currentWeather']['currentIcon']);
        print('</div>');
        print('<div class="text">');
        //printf('%s -<br />',$weatherData['location']['city']);
        printf(' T: %s/%s W:%s@%s <br />',$weatherData['currentWeather']['currentTemperatureF'],$weatherData['currentWeather']['currentTemperatureC'],$weatherData['currentWeather']['currentWindDirection'],$weatherData['currentWeather']['currentWindSpeed']);
        printf('High: %s/%s Low:%s/%s Precip:%s%%' , $weatherData['day0Forcast']['temperatureHighF'], $weatherData['day0Forcast']['temperatureHighC'], $weatherData['day0Forcast']['temperatureLowF'], $weatherData['day0Forcast']['temperatureLowC'], $weatherData['day0Forcast']['precipitationChance']);
        print('</div>');

       print ('<br />');

        print ('<div class="icon">');
        print('<canvas id="day1Icon" width="50" height="50"></canvas>');
        printf('<script>
            skycons.add("day1Icon", "%s");
         </script>', $weatherData['day1Forcast']['icon']);
        print('</div>');
        print('<div class="text">');
        printf('Tomrrow -<br />');
        printf('High: %s/%s Low:%s/%s Precip:%s%%' , $weatherData['day1Forcast']['temperatureHighF'], $weatherData['day1Forcast']['temperatureHighC'], $weatherData['day1Forcast']['temperatureLowF'], $weatherData['day1Forcast']['temperatureLowC'], $weatherData['day1Forcast']['precipitationChance']);
        print('</div>');

        print ('<br />');

        print ('<div class="icon">');
        print('<canvas id="day2Icon" width="50" height="50"></canvas>');
        printf('<script>
            skycons.add("day2Icon", "%s");
         </script>', $weatherData['day2Forcast']['icon']);
        print('</div>');
        print('<div class="text">');
        printf('Next Day - <br />');
        printf('High: %s/%s Low:%s/%s Precip:%s%%' , $weatherData['day2Forcast']['temperatureHighF'], $weatherData['day2Forcast']['temperatureHighC'], $weatherData['day2Forcast']['temperatureLowF'], $weatherData['day2Forcast']['temperatureLowC'], $weatherData['day2Forcast']['precipitationChance']);
        print('</div>');

        print('</div>');

        print('<script>skycons.play();</script>');

   }

?>
