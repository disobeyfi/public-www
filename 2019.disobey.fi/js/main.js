$(document).on("ready", function(){
	//TweenLite.to(".loader", 10, {rotation:-1440, transformOrigin:"50% 50%"});
	DOinitWaypoints();

})

$(window).on('load', function(){
		TweenLite.to(".loader", 0.6, {rotation:0, transformOrigin:"50% 50%", delay:0});
		window.setTimeout( function(){ DOshowContent()	}, 600 );
		DOresizeImages();
			lazyload();
})

$(window).on('resize', function(){
		DOresizeImages();
		$(".get-ticket").removeAttr("style")
		$(".header-row").removeAttr("style")
})

/*-------------------------
 Waypoints
 -----------------------*/
var DOinitWaypoints = function(){

	TweenMax.to("#puzzle", 0, {opacity:0});
	TweenMax.to("#location", 0, {opacity:0});
	TweenMax.to("#contact", 0, {opacity:0});
	TweenMax.to("#program", 0, {opacity:0});

	var location_waypoint = new Waypoint({
	  element: document.getElementById('puzzle'),
		offset: '60%',
	  handler: function(direction) {
	    TweenMax.to("#puzzle", 1, { opacity:1, delay:0.2 });
			 this.destroy()
	  }
	})

	var location_waypoint = new Waypoint({
	  element: document.getElementById('location'),
		offset: '60%',
	  handler: function(direction) {
	    TweenMax.to("#location", 1, { opacity:1, delay:0.2 });
			 this.destroy()
	  }
	})

	var contacts_waypoint = new Waypoint({
	  element: document.getElementById('contact'),
		offset: '60%',
	  handler: function(direction) {
	    TweenMax.to("#contact", 1, { opacity:1, delay:0.2 });
			 this.destroy()
	  }
	})

	var contacts_waypoint = new Waypoint({
	  element: document.getElementById('program'),
		offset: '90%',
	  handler: function(direction) {
	   TweenMax.to("#program", 1, { opacity:1, delay:0.2 });
			 this.destroy()
	  }
	})

}

/*-------------------------
 REsize images
 -----------------------*/
var DOresizeImages = function(){
	$(".illustration").each( function(){
			$(this).height( $(this).width() )
	})
}

/*-------------------------
 Content
 -----------------------*/
var DOshowContent = function(){
	$('.container').removeClass("hidden");
	$('body').removeClass("hide-background");
	$('.loader').addClass("hidden");
	DOshowHeader();
}

/*-------------------------
 Animation
 -----------------------*/
var DOshowHeader = function(){
		TweenLite.to(".dimmer", 1.2, { opacity:0, ease: Quad.easeIn });
		TweenLite.from(".header-row", 0.6, { height:"0vh" });
		TweenLite.to(".top-bar", 0, { height:"50vh"	 });
		TweenLite.to(".top-bar", 0.6, { height:"0px", delay:0.1	 });
		//TweenLite.to(".logo", 0, { opacity:0 });
		$(".logo").removeClass("hidden")
		TweenMax.to(".logo", 0., { scale:0, opacity:0});
		TweenMax.to(".logo", 0.6, { scale:1, opacity:1, ease: Back.easeOut.config(2.1), delay:0.4 });

		/*-------------------------
		 Date
		 -----------------------*/
		 TweenMax.to(".datetime", 0, 		{ opacity:0 });
		 TweenMax.to(".datetime", 0.6, 	{ opacity:1, delay:0.7 })
		 TweenMax.from(".datetime", 0.6, 	{ y:50, ease: Back.easeOut.config(2.1), delay:0.7 })


		 /*-------------------------
		  CTA
		  -----------------------*/
			$(".get-ticket").removeClass("hidden")
			TweenMax.to(".get-ticket", 0, 		{ opacity:0 });
			TweenMax.to(".get-ticket", 0.6, 	{ opacity:1, delay:1.3 })
			TweenMax.from(".get-ticket", 0.6, 	{ x:-450, ease: Back.easeOut.config(2.1), delay:1.3 })

			/*-------------------------
			 Program
			 -----------------------*/
			 TweenMax.to(".program", 0, 		{ opacity:0 });
 			TweenMax.to(".program", 0.6, 	{ opacity:1, delay:1.6 })
}
