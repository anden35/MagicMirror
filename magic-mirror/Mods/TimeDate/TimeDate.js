var TimeDate = {
    
    pad: function(n){
        var width = 2;
        n = n + '';
        return n.length >= width ? n : new Array(width - n.length + 1).join("0")+n
    },

    makeTime: function(){
        var current_time = new Date ();
        var current_time_array = [];
      	current_time_array['hour'] = this.pad(current_time.getHours());
      	current_time_array['minute'] = this.pad(current_time.getMinutes());
      	current_time_array['second'] = this.pad(current_time.getSeconds());
 
    
      	// Compose the string for display
      	
      	return current_time_array;
       	
    },
    
    makeDate: function(){
        var current_date = new Date ();
        var current_date_array = [];
        current_date_array['year'] = current_date.getFullYear();
        current_date_array['month'] = current_date.getMonth();
        current_date_array['day_of_month']  = this.pad(current_date.getDate());
        current_date_array['day_of_week'] = current_date.getDay();
        
        
        return current_date_array;
        
    },
    
    getTimeDate: function(){
        var time_date_array = [];
        time_date_array['time'] = this.makeTime();
        time_date_array['date'] = this.makeDate();
        return time_date_array;
    }
}
    