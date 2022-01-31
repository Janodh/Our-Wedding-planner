<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>Soulmate - Responsive Bootstrap 3 Wedding Template</title>
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen"  href="css/main.css">

<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<!--font-family: 'Great Vibes', cursive; -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif; -->

<!-- font icon css style-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">

<!--wrapper start-->
<div class="wrapper" id="wrapper"> 
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!--Header start -->
  <header>     
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container"> 
          <!--Logo -->
          <div class="logo">
          <img src="{{asset('images/Asset-1-1.png')}}" alt="your wedding plan">
          </div>
          <!--Logo -->
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <nav class="navArea">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="navigation">
                      <li class="menuItem" id="home"><a href="#wrapper">Home</a></li>
                      
                      <li class="menuItem"><a href="#theBlog">Blog</a>
                        <ul class="submenu">
                          <li><a href='blog-large-image.html'><span>Blog 1</span></a></li>
                          <li><a href='blog-medium-image.html'><span>Blog 2</span></a></li>
                          <li><a href="grid-blog.html"><span>Grid 3</span></a></li>
                        </ul>
                      </li>
                       <li class="menuItem"><a href="#photoAlbum">Gallery</a>
                        <ul class="submenu">
                          <li><a href="portfolio-full.html">Gallery style 1</a></li>
                          <li><a href="portfolio-threecolumn.html">Gallery style 2</a></li>
                          <li><a href="portfolio-fourcolumn.html">Gallery style 3</a></li>
                        </ul>
                      </li>
                      <li class="menuItem"><a href="#about">about us</a></li>
                    </ul>
                  </div>
                </nav>
                
               
              </div>
            </div>
          </div>
          <!-- End Navbar --> 
       @yield('content')
  <!--Footer start-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <p>Copyrights &copy; 2015 All Rights Reserved.</p>
      </div>
      <div class="pull-right goto"><a class="gototop smooth" href="#wrapper"><i class="fa fa-chevron-up"></i></a></div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="js/bootstrap.min.js"></script> 
<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/stickUp.js"></script> 
<script type="text/javascript">
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var map;

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(-37.817682, 144.957595), 13);
        document.getElementById("map").checked = true;
        toggleZoom(false);
      }
    }

    function toggleZoom(isChecked) {
      if (isChecked) {
        map.enableScrollWheelZoom();
      } else {
        map.disableScrollWheelZoom();
      }
    }

    //]]>
</script> 

<!--about jquery--> 
<script defer src="js/jquery.flexslider.js"></script> 

<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 
    
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
	//enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'theCouple',
		  2: 'eventsSchedule',
		  3: 'importantPeople',
		  4: 'photoAlbum',
		  5: 'theBlog',
		  6: 'about'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});	
		
		// run rlightbox
		$( ".lb" ).rlightbox();
		$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});
		
		$('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			slideshow: true,
			pauseOnAction: false,
			slideshowSpeed: 7000,
			controlNav: true,
			start: function(slider){
			$('body').removeClass('loading');
			}
		});
	
});
});
</script>

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>