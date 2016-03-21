	$(document).ready(function() {

   jQuery(".dropdown-menu li.dropdown").on("mouseenter", function() {

      jQuery(this).find(".dropdown-menu").css({
         "display": "inline-block"
      }, "slow");

   }).on("mouseleave", function() {

      jQuery(this).find(".dropdown-menu").css({
         "display": "none"
      }, "slow");

   });

	jQuery(".fa-search").click(function () {
		$(".form-group input").css("visibility", "visible");
	
	} );
        
        
       $('#container').mixItUp({ easing: 'snap', effects: ['fade'], showOnLoad: 'owner' });


});