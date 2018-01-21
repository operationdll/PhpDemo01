function reseizeWindow(){
	//mobile src="js/navbar.js"
	if(($(window).width() < 992)){
		$('.navigation-menu a').css("color","black");
		$('.navigation-menu a button').css("margin-top","0");
	}else{
		if ($(window).scrollTop() >= 100 ) {
			$('#topnav').addClass('scroll');
			$('#topnav').css("background","white");
			$('.navigation-menu a').css("color","black");
			$('#topnav .menu-item').css("border","0px");
		}else{
			$('#topnav').removeClass('scroll');
			$('.navigation-menu a').css("color","white");
			$('#topnav').css("background","");
		}
		$('.navigation-menu a button').css("margin-top","-5%");
	}
	if(($(window).width() < 992)){
		$('.navbar-toggle').show();
	}else{
		$('.navbar-toggle').hide();
	}
}

$(window).resize(function(){
	reseizeWindow();
});

$(window).load(function(){
	reseizeWindow();
});

var isOpen = false;
$("#navBar").click(function(){
	if(isOpen){
		$('.cart').hide();
		isOpen = false;
	}else{
		$('.cart').show();
		isOpen = true;
	}
});