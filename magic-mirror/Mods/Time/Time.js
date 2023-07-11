/* so this is crap and needs to be redone, remade, re-something.
I am just not sure how it do anything "the right way" in JS....
sooo back burning this for now....*/

function updateClock(){
    var currentTime = new Date ();
  	var currentHours = pad(currentTime.getHours());
  	var currentMinutes = pad(currentTime.getMinutes());
  	var currentSeconds = pad(currentTime.getSeconds());
    /*var timeOfDay;
    if (currentTime.getHours()>12){
        timeOfDay="PM";
        currentHours= currentHours-12;
    }else{
           timeOfDay="AM";
    } */

  	// Compose the string for display
  	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " //+ timeOfDay;
  	
  	
   	$("#clock").html(currentTimeString);
   	  
}

function pad(n){
    var width = 2;
    n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join("0")+n;    
}