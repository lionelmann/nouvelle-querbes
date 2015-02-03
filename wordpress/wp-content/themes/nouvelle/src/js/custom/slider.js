jQuery(document).ready(function(){
	jQuery('.bxslider').bxSlider({
  		auto: true,	
		mode: 'fade',
		pager: false,
		onSliderLoad: function(){
        jQuery(".bxslider").css("visibility", "visible");
      }
	});
});