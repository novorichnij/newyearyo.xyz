$ (document).ready (function () {
// --------- Adaptation -----------------------------------------------------------------

	// скрол (фиксирование хедера)
	$ (window).scroll (function () {
		var winPosition = $ (window).scrollTop ();
		if ( winPosition > 0.0000000001) {
			$ ("#wrapper").css ({"margin-top" : "84px"});
			$ ("#header").addClass ("header-fix");
			$ ("#header").css ({"z-index" : "20"});
			$ (".go-to-top").fadeIn (500);
		} else {
			$ ("#wrapper").css ({"margin-top" : "20px"});
			$ ("#header").removeClass ("header-fix");
			$ (".go-to-top").fadeOut (500);
		}
	});

	// кнопка го-ту-топ
	$ (".go-to-top").click (function (){
		$ ("html, body").animate ({scrollTop: 0}, 900);
	});

	// изменение размера окна
	function winResize () {
		var winWidth = $ (window).width ();
		if (winWidth < 960) {
			$ ("#right-col").hide ();
			$ ("#left-col").css ({"width" : "100%", "padding-right" : "0"});
			$ (".site-title").text ("Menu");
			$ ("#avatar").attr ({href : "#", title : "Menu"});
			$ ("#avatar-clone").show ();
			$ (".main-nav-link").css ({"float" : "none", "border-top" : "2px solid #eceff2"});
			$ ("#main-nav").hide ();
			$ ("#search").hide ();
		} else if (winWidth > 959) {
			$ ("#right-col").show ();
			$ ("#left-col").css ({"width" : "70%", "padding-right" : "5%"});
			$ (".site-title").text ("Newyearyo");
			$ ("#avatar").attr ({href : "/", title : "Main"});
			$ ("#avatar-clone").hide ();
			$ (".main-nav-link").css ({"float" : "left", "border-top" : "none"});
			$ ("#main-nav").show ();
			$ ("#search").show ();
		}
	};

	winResize ();

	$ (window).resize (function () {
		winResize ();
	});


	$ ("#avatar").click (function () {
		var winWidth = $ (window).width ();
		if (winWidth < 960) {	
			$ ("#main-nav").slideToggle (300, 'linear');
		}
	});



});

// ------------------------------------------------------------------------------------

