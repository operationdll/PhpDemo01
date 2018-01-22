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
	//add class
	$("a,div").css("font-family","FreightSansProBook");
	$("a[bnt],button[bnt]").css({"border":"1px solid black","background-color":"black","color":"white","border-radius":"1px"});
	$("a[bnt],button[bnt]").mouseover(function(){
		$(this).css({"background-color":"white","color":"black"});
	});
	$("a[bnt],button[bnt]").mouseout(function(){
		$(this).css({"background-color":"black","color":"white"});
	});
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