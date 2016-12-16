$(document).ready(function(){
    $("#main").css("height",$(window).height());    
    $("#main-row").css("paddingTop",($(window).height()/2)-200+"px"); 
    $("#diary").css("height",($(window).height())-200+"px"); 
    $("#diary").keyup(function(){
    $.ajax({
           url: "update.php", 
           type: "POST", 
           data : { diary :$("#diary").val()                  
                  }
                  }); 
      
    });
 $(function() {	
	// Cache the Window object
	var $window = $(window);	
	// Parallax Backgrounds
	$('section[data-type="background"]').each(function(){
       var $bgobj = $(this); // assigning the object
        $(window).scroll(function(){
                //scroll the background at var speed
                // the yPos is a negative value because we're scrolling it up
        var yPos = -(($window.scrollTop() - $bgobj.offset().top)/$bgobj.data('speed'));
        // put together our final background position
            var coords='50%' + yPos + 'px';
            //Move the background
            $bgobj.css({backgroundPosition:coords});
                         });
    });	
}());
            
  
});