
    
   function display (time_date_info){
        day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        months_long = ["January","February","March","April","May","June","July","August","September","October","November","December"];
        
        $('#clock').html(day[time_date_info['date']['day_of_week']] + ', '+ months_long[time_date_info['date']['month']] + ', ' + time_date_info['date']['day_of_month'] + ' - '  );
        $('#clock').append(time_date_info['time']['hour'] + ':' + time_date_info['time']['minute']);
    }