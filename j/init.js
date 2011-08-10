jQuery(document).ready(function($) {
/*  ................................call inits........................................ */
	jQuery('#coda-slider-1').codaSlider();
	jQuery("#stabCord").accordion();
	jQuery(".carousel").jCarouselLite({vertical:true, btnNext:".next",btnPrev:".prev"});		
		/* absolute nav shopping cart mechanism */
		$('.shoppingcart').hide();
		$('a.cart').click(function(){
		if ($('.shoppingcart').is(':hidden')) { 
		      $('.shoppingcart').animate({ opacity: 'toggle', width: 'slideToggle' }, 860); 
		    } else {
		      $('.shoppingcart').fadeOut('6000');
		    } 
			return false;
		});
		$("#stb_ul li").each(function(index) { 
			$(this).find("a").attr("href", "#" + (index + 1));
		});
//Adjust panel height - footer socbuttons
$.fn.adjustPanel = function(){
    $(this).find("ul, .ftsub").css({ 'height' : 'auto'}); //Reset sub-panel and ul height

    var windowHeight = $(window).height(); //Get the height of the browser viewport
    var panelsub = $(this).find(".ftsub").height(); //Get the height of sub-panel
    var panelAdjust = windowHeight - 100; //Viewport height - 100px (Sets max height of sub-panel)
    var ulAdjust =  panelAdjust - 25; //Calculate ul size after adjusting sub-panel

    if ( panelsub > panelAdjust ) {	 //If sub-panel is taller than max height...
        $(this).find(".ftsub").css({ 'height' : panelAdjust }); //Adjust sub-panel to max height
        $(this).find("ul").css({ 'height' : panelAdjust}); ////Adjust ftsub ul to new size
    }
    else { //If sub-panel is smaller than max height...
        $(this).find("ul").css({ 'height' : 'auto'}); //Set sub-panel ul to auto (default size)
    }
};
//Execute function on load
$("#ftconnex").adjustPanel(); //Run the adjustPanel function on #ftconnex
//Each time the viewport is adjusted/resized, execute the function
$(window).resize(function () {
    $("#ftconnex").adjustPanel();
});
//Click event on Chat Panel and Alert Panel	
$("#ftconnex a:first").click(function() { //If clicked on the first link of #ftconnex
    if($(this).next(".ftsub").is(':visible')) { 
    //If ftsub is already active...
        $(this).next(".ftsub").hide(); //Hide active ftsub
        $("#footpanel li a").removeClass('active'); //Remove active class on the ftsub trigger
    }
    else { 
    //if ftsub is not active...
        $(".ftsub").hide(); //Hide all ftsubs
        $(this).next(".ftsub").toggle(); //Toggle the ftsub to make active
        $("#footpanel li a").removeClass('active'); //Remove active class on all ftsub trigger
        $(this).toggleClass('active'); //Toggle the active class on the ftsub trigger
    }
    return false; 
    //Prevent browser jump to link anchor
});
//Click event outside of ftsub
$(document).click(function() { //Click anywhere and...
    $(".ftsub").hide(); //hide ftsub
    $("#footpanel li a").removeClass('active'); //remove active class on ftsub trigger
});
$('.ftsub ul').click(function(e) {
    e.stopPropagation(); //Prevents the ftsub ul from closing on click
    });
});