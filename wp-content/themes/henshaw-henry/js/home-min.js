function createWaypoint(e,t,n,o,i,s){var r=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(t).addClass(n),"function"==typeof i&&i.call()):s&&(jQuery(t).removeClass(n),"function"==typeof i&&i.call())},offset:o})}createWaypoint("section_two",".sticky_menu","visible","300px",null,!0);var waypointsectwo=new Waypoint({element:document.getElementById("section_two"),handler:function(e){jQuery("#section_two").addClass("visible")},offset:300}),waypointsectwo=new Waypoint({element:document.getElementById("section_three_trigger"),handler:function(e){jQuery(".section_three").addClass("visible")},offset:300}),waypointsectwo=new Waypoint({element:document.getElementById("section_four_trigger"),handler:function(e){jQuery(".why_choose_wrapper").addClass("visible")},offset:1e3}),waypointsectwo=new Waypoint({element:document.getElementById("section_four_trigger"),handler:function(e){jQuery("#section_four_trigger").addClass("visible")},offset:500}),waypointsectwo=new Waypoint({element:document.getElementById("section_six_trigger"),handler:function(e){jQuery("#section_six_trigger").addClass("visible")},offset:400}),waypointsectwo=new Waypoint({element:document.getElementById("footer_trigger"),handler:function(e){jQuery("#footer_trigger").addClass("visible")},offset:500});