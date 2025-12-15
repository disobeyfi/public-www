/*-------------------------
Document Ready
-----------------------*/
$(document).on("ready", function () {

  $(document).foundation();
  DOinitWaypoints();
  checkDimensions();
  TweenMax.to(".navigation-bar a", 0, {y: -250})

})
/*-------------------------
On Load
-----------------------*/
$(window).on('load', function () {

  TweenMax.to(".loader", 0.6, {rotation: 0, transformOrigin: "50% 50%", delay: 0});
  window.setTimeout(function () {
    DOshowContent()
  }, 600);
  DOresizeImages();
  lazyload();

  if ($("body").hasClass("frontpage")) {
    animateHeaders();
  }
})
/*-------------------------
OnResize
-----------------------*/
$(window).on('resize', function () {
  DOresizeImages();
  $(".get-ticket").removeAttr("style")
  $(".header-row").removeAttr("style")

  checkDimensions();
})


var in_transition = false;

/*-------------------------
change Headers according to video
-----------------------*/
animateHeaders = function () {

  changeColor();


  var video_time_listener = setInterval(function () {
    changeColor();
  }, 500)

}

var changeColor = function () {

  var video = document.getElementById('videoplayer');

  if (video.currentTime < 1.5) {


    in_transition = false;

    //$("body").addClass("on-red")

    // Only update src if it's different to avoid constant reloading
    var mainMobileLogo = $("#main-mobile-logo");
    var naviFrontpageLogo = $("a[data-nav='frontpage'] img");
    var mainLogo = $("#main-logo");

    if (mainMobileLogo.attr("src") !== BASEURL + "img/logo_mobile.webp") {
      mainMobileLogo.attr("src", BASEURL + "img/logo_mobile.webp");
    }
    if (naviFrontpageLogo.attr("src") !== BASEURL + "img/just_logo.png") {
      naviFrontpageLogo.attr("src", BASEURL + "img/just_logo.png");
    }
    if (mainLogo.attr("src") !== BASEURL + "img/logo.webp") {
      mainLogo.attr("src", BASEURL + "img/logo.webp");
    }


  } else {

    if (in_transition == false) {

      in_transition = true;

      //$("body").removeClass("on-red")


      $("#main-logo").attr("src", BASEURL + "img/glitch_logo/logo_glitch_1.webp")
      $("#main-mobile-logo").attr("src", BASEURL + "img/glitch_logo/logo_mobile_dbh_glitch_1.webp")
      $(".header-content").addClass("glitch_1")

      /*-------------------------
      Simple series of animation
      for the glitch logo
      -----------------------*/
      let step_1 = setTimeout(function () {
        $("#main-logo").attr("src", BASEURL + "img/glitch_logo/logo_glitch_2.webp")
        $("#main-mobile-logo").attr("src", BASEURL + "img/glitch_logo/logo_mobile_dbh_glitch_2.webp")
        $(".header-content").addClass("glitch_2").removeClass("glitch_1")
      }, 300)
      let step_2 = setTimeout(function () {
        $("#main-logo").attr("src", BASEURL + "img/glitch_logo/logo_glitch_3.webp")
        $("#main-mobile-logo").attr("src", BASEURL + "img/glitch_logo/logo_mobile_dbh_glitch_3.webp")
        $(".header-content").addClass("glitch_3").removeClass("glitch_2")
      }, 600)
      let step_3 = setTimeout(function () {
        $("#main-logo").attr("src", BASEURL + "img/logo.webp")
        $("#main-mobile-logo").attr("src", BASEURL + "img/logo_mobile.webp")
        $(".header-content").removeClass("glitch_3")
      }, 900)


    }


  }
}


/*-------------------------
 Dimensions Check
--------------------------*/

var checkDimensions = function () {


  var height = window.innerHeight
  var width = window.innerWidth

  if (width / height > 16 / 9) {
    $("body").addClass("ultra-wide")
  } else {
    $("body").removeClass("ultra-wide")
  }
}

/*-------------------------
 Waypoints
 -----------------------*/
var DOinitWaypoints = function () {

  TweenMax.to("#cfp", 0, {opacity: 0});
  TweenMax.to("#puzzle", 0, {opacity: 0});
  TweenMax.to("#location", 0, {opacity: 0});
  TweenMax.to("#contact", 0, {opacity: 0});
  TweenMax.to("#program", 0, {opacity: 0});
  TweenMax.to("#about", 0, {opacity: 0});

  TweenMax.to("#speakers", 0, {opacity: 0});
  TweenMax.to("#program-highlights", 0, {opacity: 0});


  try {
    var location_waypoint = new Waypoint({
      element: document.getElementById('speakers'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#speakers", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No puzzle on page")
  }


  try {
    var location_waypoint = new Waypoint({
      element: document.getElementById('program-highlights'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#program-highlights", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No program-highlights on page")
  }


  try {
    var location_waypoint = new Waypoint({
      element: document.getElementById('cfp'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#cfp", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No cfp on page")
  }


  try {
    var location_waypoint = new Waypoint({
      element: document.getElementById('puzzle'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#puzzle", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No puzzle on page")
  }


  try {
    var location_waypoint = new Waypoint({
      element: document.getElementById('location'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#location", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No location on page")
  }

  /*-------------------------
   Contact
   -----------------------*/
  try {
    var contacts_waypoint = new Waypoint({
      element: document.getElementById('contact'),
      offset: '100%',
      handler: function (direction) {
        TweenMax.to("#contact", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No contact on page")
  }
  /*-------------------------
   Program
   -----------------------*/
  try {
    var contacts_waypoint = new Waypoint({
      element: document.getElementById('program'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#program", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No program on page")
  }

  /*-------------------------
   About
   -----------------------*/
  try {
    var contacts_waypoint = new Waypoint({
      element: document.getElementById('about'),
      offset: '80%',
      handler: function (direction) {
        TweenMax.to("#about", 1, {opacity: 1, delay: 0.2});
        this.destroy()
      }
    })
  } catch (error) {
    console.log("No about on page")
  }

}

/*-------------------------
 REsize images
 -----------------------*/
var DOresizeImages = function () {
  $(".illustration").each(function () {
    $(this).height($(this).width())
  })
}

/*-------------------------
 Content
 -----------------------*/
var DOshowContent = function () {
  $('.container').removeClass("hidden");
  $('body').removeClass("hide-background");
  $('.loader').addClass("hidden");
  $('#loader-container').addClass("hidden");
  DOshowHeader();
  DOshowNavigation();

  try {
    initAnimation();
  } catch (error) {
  }
}
/*-------------------------
 Animation
 -----------------------*/
var DOshowNavigation = function () {

  TweenMax.to(".navigation-bar", 0.6, {opacity: 1});

  TweenMax.staggerTo(".navigation-bar a", 0.2, {y: 0, ease: Quad.easeOut}, 0.08)
  $('.navigation-bar').removeClass("hidden");
}
/*-------------------------
 Animation
 -----------------------*/
var DOshowHeader = function () {
  TweenLite.to(".dimmer", 1.2, {opacity: 0, ease: Quad.easeIn});
  TweenLite.from(".header-row", 0.6, {height: "0vh"});
  TweenLite.to(".top-bar", 0, {height: "50vh"});
  TweenLite.to(".top-bar", 0.6, {height: "0px", delay: 0.1});
  //TweenLite.to(".logo", 0, { opacity:0 });
  $(".logo").removeClass("hidden")
  TweenMax.to(".logo", 0., {scale: 0, opacity: 0});
  TweenMax.to(".logo", 0.6, {scale: 1, opacity: 1, ease: Back.easeOut.config(2.1), delay: 0.4});

  $("#tickets-page-get-ticket").removeClass("hidden")
  TweenMax.to("#tickets-page-get-ticket", 0., {scale: 0, opacity: 0});
  TweenMax.to("#tickets-page-get-ticket", 0.6, {scale: 1, opacity: 1, ease: Back.easeOut.config(2.1), delay: 0.6});
  /*-------------------------
   Date
   -----------------------*/
  TweenMax.to(".datetime", 0, {opacity: 0});
  TweenMax.to(".datetime", 0.6, {opacity: 1, delay: 0.7})
  TweenMax.from(".datetime", 0.6, {y: 50, ease: Back.easeOut.config(2.1), delay: 0.7})


  /*-------------------------
   CTA
   -----------------------*/
  $(".get-ticket").removeClass("hidden")
  TweenMax.to(".get-ticket", 0, {opacity: 0});
  TweenMax.to(".get-ticket", 0.6, {opacity: 1, delay: 1.3})
  TweenMax.from(".get-ticket", 0.6, {x: -450, ease: Back.easeOut.config(2.1), delay: 1.3})

  /*-------------------------
   Program
   -----------------------*/
  TweenMax.to(".program", 0, {opacity: 0});
  TweenMax.to(".program", 0.6, {opacity: 1, delay: 1.6})

  TweenMax.to("#about", 0, {opacity: 0});
  TweenMax.to("#about", 0.6, {opacity: 1, delay: 0.3})

  TweenMax.to("#schedule", 0, {opacity: 0});
  TweenMax.to("#schedule", 0.6, {opacity: 1, delay: 0.3})
}
