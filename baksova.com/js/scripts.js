(function($){


	var mediaciaContent = $('.mediacia-content'),
		threeColumns = $('.three-columns'),
		etickyKodex = $('.eticky-kodex'),
		sectionCennik = $('.section-cennik'),
		cover = $('.cover'),
		kontakt = $('.prefooter'),
		mainNav = $('nav'),
		win = $(window),
		menuDropdown = $('.menu-dropdown'),
		backToTop = $('.back-to-top'),
		menuLinks = $('.cover a, .main-nav a');

	//scroll viac button
	etickyKodex.find('dd').hide();
	etickyKodex.find('a').on('click', function(){

		var a = $(this),
			dd = $(this).prev();

		dd.slideToggle();

		a.text(a.text() == 'Prečítať si viac' ? 'Menej' : 'Prečítať si viac');
		if ( a.text() == 'Prečítať si viac' ) $('body').animate({ scrollTop: 1700 });
	});

	win.on('scroll', function() { 

		if ( win.scrollTop() >= threeColumns.offset().top - 20) {
			backToTop.fadeIn(1200)
					 .addClass("visible-false")
					 .removeClass("visible-true");
		} else {
			backToTop.fadeOut()
					 .removeClass("visible-true")
					 .addClass("visible-false");
		}
	});



	if ( win.width() > 700 ) { 

		menuDropdown.removeClass( "visible-true" )
					.addClass( "visible-false" );

		
		win.on('scroll', function() {
			

			// enable menu
			if ( win.scrollTop() >= ( cover.height() - 20 ) ) mainNav.fadeIn().addClass("visible");
			else mainNav.fadeOut();

			//selected mediacia
			if ( ( win.scrollTop() <= ( threeColumns.offset().top - 20 )) )
				mainNav.find('li:nth-child(1) a').addClass( "selected" );
			else
				mainNav.find('li:nth-child(1) a').removeClass( "selected" );

			//selected info
			if (( win.scrollTop() >= threeColumns.offset().top - 20 ) & ( win.scrollTop() <= ( etickyKodex.offset().top - 20 )) )
				mainNav.find('li:nth-child(2) a').addClass( "selected" );
			else
				mainNav.find('li:nth-child(2) a').removeClass( "selected" );

			//selected eticky kodex	
			if (( win.scrollTop() >= etickyKodex.offset().top - 20 ) & ( win.scrollTop() <= ( sectionCennik.offset().top - 20 )) )
				mainNav.find('li:nth-child(3) a').addClass( "selected" );
			else
				mainNav.find('li:nth-child(3) a').removeClass( "selected" );	

			//selected cennik
			if (( win.scrollTop() >= sectionCennik.offset().top - 20 ) & ( win.scrollTop() <= ( kontakt.offset().top - 30 )) )
				mainNav.find('li:nth-child(4) a').addClass( "selected" );
			else
				mainNav.find('li:nth-child(4) a').removeClass( "selected" );

			if ( win.scrollTop() >= kontakt.offset().top - 30 ) 
				mainNav.find('li:nth-child(5) a').addClass( "selected" );
			else
				mainNav.find('li:nth-child(5) a').removeClass( "selected" );

		});
	} else {
		menuDropdown.removeClass( "visible-false" )
		 			.addClass( ".visible-true" );
	};



	//scrolling to the section
	menuLinks.on('click', function(event)
	{
		event.preventDefault();
		var id = this.hash;
		$('body, html').animate({ scrollTop: $(id).offset().top }, function() {
			window.location.hash = id;
		});
	});

	backToTop.on('click', function(event) {
		event.preventDefault();
		var id = this.hash;
		$('body, html').animate({ scrollTop: $(id).offset().top }, function() {
			window.location.hash = id;
		});
	});

})(jQuery);