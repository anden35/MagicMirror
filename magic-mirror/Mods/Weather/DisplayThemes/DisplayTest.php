<?php

    function display($weather_data){
        printf('<h3> %s </h3> <br />' , $weather_data['location']['city']);
        printf('Wind:%d@%d <br />' , $weather_data['today']['wind_mph'], $weather_data['today']['wind_degrees'] );
        printf('Temps(F/C): C-%d/%d H-%d/%d L-%d/%d <br />' , $weather_data['today']['t_current_f'], $weather_data['today']['t_current_c'] , $weather_data['today']['t_high_f'], $weather_data['today']['t_high_c'], $weather_data['today']['t_low_f'], $weather_data['today']['t_low_c']);
        printf('Sky Condition: %s <br />' , $weather_data['today']['con']);
        printf('Rain from the sky? %d%% says yes. <br />' , $weather_data['today']['pop']);
        printf('<h3> For tomorrow:</h3><br />');
        printf('Temps(F/C): H-%d/%d L-%d/%d <br />' , $weather_data['tomorrow']['t_high_f'], $weather_data['tomorrow']['t_high_c'],$weather_data['tomorrow']['t_low_f'], $weather_data['tomorrow']['t_low_c']);
        printf('Sky Condition: %s <br />' , $weather_data['tomorrow']['con']);
        printf('Rain from the sky? %d%% says yes. <br />' , $weather_data['tomorrow']['pop']);
        printf('<h3>ANNNNNND the next day:</h3><br />');
        printf('Temps(F/C): H-%d/%d L-%d/%d <br />' , $weather_data['next_day']['t_high_f'], $weather_data['next_day']['t_high_c'],$weather_data['next_day']['t_low_f'], $weather_data['next_day']['t_low_c']);
        printf('Sky Condition: %s <br />' , $weather_data['next_day']['con']);
        printf('Rain from the sky? %d%% says yes. <br />' , $weather_data['next_day']['pop']);
        
        
   }