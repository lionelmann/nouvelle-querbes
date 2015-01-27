jQuery(document).ready(function($){
	$('.search a').click(function(){
		$(this).toggleClass('active');
		var body =$('body');
		if(!body.hasClass('page')){
			var src = $('.logo a img').attr('src');
			var logo_1=template_url+"/images/logo.png";
			var logo_2=template_url+"/images/ecole-logo.png";
			if(src==logo_1) {
				$('.logo a img').attr('src',logo_2);
				$('.logo a').addClass('active-logo');
			}else {
				$('.logo a img').attr('src',logo_1);
				$('.logo a').removeClass('active-logo');
			}
		}
		
		if(!body.hasClass('single')){
			var src = $('.logo a img').attr('src');
			var logo_1=template_url+"/images/logo.png";
			var logo_2=template_url+"/images/ecole-logo.png";
			if(src==logo_1) {
				$('.logo a img').attr('src',logo_2);
				$('.logo a').addClass('active-logo');
			}else {
				$('.logo a img').attr('src',logo_1);
				$('.logo a').removeClass('active-logo');
			}
		}
		$('#search-box').slideToggle();
		return false;
	});
});