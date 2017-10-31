$ (document).ready (function () {
// --------- Slider ---------------------------------------------------------------------

	$ (".slide").first ().show ();
	$ (".slide").first ().addClass ("current-slide");
	$ (".button-slide").first ().css ({"background-color": "rgba(245,248,249,.76)", "color": "#000000"});
	
	$ (".next-slide").click (function () {
		var currentSlide = $ (".current-slide");
		var currentSlideIndex = $ (".current-slide").index ();
		var nextSlideIndex = currentSlideIndex + 1;
		var nextSlide = $ (".slide").eq (nextSlideIndex);
		currentSlide.hide ().removeClass ("current-slide");
		$ (".button-slide").eq (currentSlideIndex).css ({"background-color": "rgba(0,0,0,0)", "color": "#fff"});

		if (currentSlideIndex == ($ (".slide:last").index () )) {
			$ (".slide").eq (0).fadeIn (200).addClass ("current-slide");
			$ (".button-slide").eq (0).css ({"background-color": "rgba(245,248,249,.76)", "color": "#000000"});
		} else {
			nextSlide.fadeIn (200).addClass ("current-slide");
			$ (".button-slide").eq (nextSlideIndex).css ({"background-color": "rgba(245,248,249,.76)", "color": "#000000"});

		}
	});

	$ (".prev-slide").click (function () {
		var currentSlide = $ (".current-slide");
		var currentSlideIndex = $ (".current-slide").index ();
		var prevSlideIndex = currentSlideIndex - 1;
		var prevSlide = $ (".slide").eq (prevSlideIndex);

		currentSlide.hide ().removeClass ("current-slide");
		prevSlide.fadeIn (200).addClass ("current-slide");
		$ (".button-slide").eq (currentSlideIndex).css ({"background-color": "rgba(0,0,0,0)", "color": "#fff"});
		$ (".button-slide").eq (prevSlideIndex).css ({"background-color": "rgba(245,248,249,.76)", "color": "#000000"});


	});

	$ (".button-slide").click (function () {
		$ (".button-slide").css ({"background-color": "rgba(0,0,0,0)", "color": "#fff"});
		$ (this).css ({"background-color": "rgba(245,248,249,.76)", "color": "#000000"});
		buttonSlideIndex = $ (this).index ();
		$ (".slide").hide ().removeClass ("current-slide");
		$ (".slide").eq (buttonSlideIndex).fadeIn (200).addClass ("current-slide");
	});



});

// --------------------------------------------------------------------------------------

