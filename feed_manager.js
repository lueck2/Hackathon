function postEvents(){
	$.getJSON('get_new_feed.php', function(json){
	
		//code to process the html renderings of the new event set, created by successful call to get_feed.php
		for(var i=0; i<json.events.length; i++)
		{
			//display or elsewise modify html page to display json.events[i] in a list
		}
	
	});   
	
}
setInterval( "postEvents()", 10000 ); //time in milliseconds before running again