<!DOCTYPE HTML>
<html>
<head>
	<title>Blogname a Blogging Category Flat Bootstarp  Responsive Web Template | Home :: w3layouts</title>
	<link href="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="{{asset('/css/dress/rose/style.css')}}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="{{asset('/js/bases/rose/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/bases/rose/easing.js')}}"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---strat-banner---->
<div class="banner">				
	 <div class="header">  
		  <div class="container">
			  <div class="logo">
					<a href="index.html"> <img src="{{asset('/images/bases/rose/logo.png')}}" title="soup" /></a>
			 </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="index.html">HOME</a></li>						
						<li><a href="contact.html">CONTACT</a></li>	
						<li><a href="terms.html">TERMS</a></li>						
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
		 </div>
	 </div>
	 <div class="container">
		 <div class="banner-head">
			 <h1>Lorem ipsum dolor sit amet</h1>
			 <h2>cliquam tincidunt mauris</h2>
		 </div>
		 <div class="banner-links">
			 <ul>
				 <li class="active"><a href="#">LOREM IPSUM</a></li>
				 <li><a href="#">DOLAR SITE AMET</a></li>
				 <li><a href="#">MORBI IN SEM</a></li>
				 <div class="clearfix"></div>
			 </ul>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3>POST OF THE DAY</h3>
						 <h4>July 24, 2014,Posted by: <a href="#">Admin</a></h4>
						 <div class="clearfix"></div>
					 </div>
					 <div class="content-grid-info">
						 <h3><a href="single.html">MORBI IN SEM QUIS DUI</a></h3>
						 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
						 <img src="{{asset('/images/bases/rose/c1.jpg')}}" alt=""/>
						 <a class="bttn" href="single.html">MORE</a>
					</div>
				 </div>
				 
				 <div class="content-grid-sec">
					 <div class="content-sec-info">
							 <h3><a href="single.html">ALIQUAM TINCIDUNT MAURI</a></h3>
							 <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
							 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
							 <img src="{{asset('/images/bases/rose/c2.jpg')}}" alt=""/>
							 <a class="bttn" href="single.html">MORE</a>
					 </div>
				 </div>
				 <div class="content-grid-sec">
					 <div class="content-sec-info">
							 <h3><a href="single.html">VESTIBULUM COMMODO FELIS</a></h3>
							 <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
							 <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
							 <img src="{{asset('/images/bases/rose/c3.jpg')}}" alt=""/>
							 <a class="bttn" href="single.html">MORE</a>
					 </div>
				 </div>				 
				 <div class="pages">
					 <ul>
						 <li class="active"><a href="#">1</a></li>
						 <li><a href="#">2</a></li>
						 <li><a href="#">3</a></li>
						 <li><a href="#">4</a></li>
						 <li><a href="#">5</a></li>
						 <li><a href="#">6</a></li>
						 <li><a href="#">Previous</a></li>
						 <li><a href="#">Next</a></li>
					 </ul>
				 </div>				 
			 </div>
			 
			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						<form>
							<input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
							<input type="submit" value="">
						</form>
				 </div>
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <li class="active"><a href="#">Donec quis dui at dolor tempor</a></li>
					 <li><a href="#">Vestibulum commodo felis quis tort</a></li>
					 <li><a href="#">Fusce pellentesque suscipit</a></li>
				 </div>
				 <div class="archives">
					 <h3>ARCHIVES</h3>
					 <li class="active"><a href="#">July 2014</a></li>
					 <li><a href="#">June 2014</a></li>
					 <li><a href="#">May 2014</a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--fotter-->
<div class="fotter">
	 <div class="container">
		 <div class="col-md-4 fotter-info">
			 <h3>INTEGER VITAE LIBERO</h3>
			 <p>Raesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. </p>
			 <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus. </p>
		 </div>
		 <div class="col-md-4 fotter-list">
			 <h3>VESTIBULUM COMMO</h3>
			 <ul>
			 <li><a href="#">Ut alliquam solicitudin</a></li>
			 <li><a href="#">Neque id cursus faucibus</a></li>
			 <li><a href="#">Raesent dapibus neque id cursus</a></li>
			 </ul>
		 </div>
		 <div class="col-md-4 fotter-media">
				<h3>FOLLOW US ON....</h3>
				 <div class="social-icons">
				 <a href="#"><span class="fb"> </span></a>
				 <a href="#"><span class="twt"> </span></a>
				 <a href="#"><span class="in"> </span></a>				 			 
			    </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---fotter/-->
<div class="copywrite">
	 <div class="container">
	 <p>Copyrights &copy; 2015 Blogging All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>