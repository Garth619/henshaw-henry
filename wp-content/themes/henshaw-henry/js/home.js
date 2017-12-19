

 function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
                var waypoint = new Waypoint({
                    element: document.getElementById(triggerElementId),
                    handler: function(direction) {
                        if (direction === 'down') {
                            jQuery(animatedElement).addClass(className);

                            if(typeof functionName === 'function') {
                                functionName.call();
                            }
                        }

                        else {

                            if(reverse) {
                                jQuery(animatedElement).removeClass(className);

                                if(typeof functionName === 'function') {
                                    functionName.call();
                                }
                            }

                        }
                    },
                    offset: offsetVal
                    // Integer or percent
                    // 500 means when element is 500px from the top of the page, the event triggers
                    // 50% means when element is 50% from the top of the page, the event triggers
                });
            }

            //Waypoint Instance - Add Class To Element
            //Template -> createWaypoint("id-name", ".class-name", "class-to-be-added", offset-value, null, true);
            //Example -> createWaypoint("section-2", ".section-2-orange-dot", "section-2-orange-dot-active", 500, null, true);

            //Waypoint Instance - Call Function
            //Template -> createWaypoint("id-name", null, null, null, function-name, true);
            //Example -> createWaypoint("section-2", null, null, null, test, true);
            
            
           createWaypoint("section_two", ".sticky_menu", "visible", "300px", null,true);
           
           
           
           
           
           
           var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('section_two'),
					 handler: function(direction) {
   
   
							jQuery('#section_two').addClass('visible');
  
 				
 						},
  			
 						offset: 300
						
					}) 
					
					
					
					var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('section_three_trigger'),
					 handler: function(direction) {
   
   
							jQuery('.section_three').addClass('visible');
  
 				
 						},
  			
 						offset: 300
						
					})
					
					
					var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('section_four_trigger'),
					 handler: function(direction) {
   
   
							jQuery('.why_choose_wrapper').addClass('visible');
  
 				
 						},
  			
 						offset: 1000
						
					})
					
					
					var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('section_four_trigger'),
					 handler: function(direction) {
   
   
							jQuery('#section_four_trigger').addClass('visible');
  
 				
 						},
  			
 						offset: 500
						
					})
					
					
					var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('section_six_trigger'),
					 handler: function(direction) {
   
   
							jQuery('#section_six_trigger').addClass('visible');
  
 				
 						},
  			
 						offset: 400
						
					})
					
					
					
					var waypointsectwo = new Waypoint({
					 
					 element: document.getElementById('footer_trigger'),
					 handler: function(direction) {
   
   
							jQuery('#footer_trigger').addClass('visible');
  
 				
 						},
  			
 						offset: 500
						
					})
					
				
           
           
           
           
           
           
           
           
           
           //createWaypoint("section_two", "#section_two", "visible", "300px", null,true);
           
           
           // createWaypoint("section_three_trigger", ".section_three", "visible", "300px", null,true);
           
           
           // createWaypoint("section_four_trigger", ".why_choose_wrapper", "visible", "1000px", null,true);
           
           
           // createWaypoint("section_four_trigger", "#section_four_trigger", "visible", "500px", null,true);
           
           
           // createWaypoint("section_six_trigger", "#section_six_trigger", "visible", "400px", null,true);
           
           
           // createWaypoint("footer_trigger", "#footer_trigger", "visible", "500px", null,true);
           
           
           
           
           
           