<!DOCTYPE html>
<html>
<head>
	<?php include_http_metas() ?>
    	<?php include_metas() ?>
    	<?php include_title() ?>
    	<link rel="shortcut icon" href="/favicon.ico" />
    	<?php include_stylesheets() ?>
    	<?php include_javascripts() ?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="css/inland-wood.css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<title>James's Home Page</title>
</head>

<body>
<div id="wrapper960" class="clearfix">
	<div id="toplinks">
		<ul class="toplinks_links">
			<li><a href="top1">Top link #1</a></li>
			<li><a href="top2">Top link #2</a></li>
			<li><a href="top3">Top link #3</a></li>
			<li><a href="top4">Top link #4</a></li>
		</ul>
	</div>

	<div id="header" class="clearfix shadow">
		<div id="sitetitle" class="clearfix">
			<h1><a href="index">James's Home Page</a></h1>
		</div>

		<div id="nav" class="clearfix">
			<ul>
				<li><a class="current" href="index">Home</a></li>
				<li><a href="about">About</a></li>
				<li><a href="projects">Projects</a></li>
				<li><a href="races">Races</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</div>
	</div>

	<div class="slider-wrapper">
		<div id="slider" class="nivoSlider">
			<img src="images/slider3.jpg" alt="" />
			<img src="images/slider1.jpg" alt="" />
			<img src="images/slider2.jpg" alt="" />
			<img src="images/slider0.jpg" alt="" />
			<img src="images/slider4.jpg" alt="" />
		</div>
	</div>

	<div id="content" class="clearfix shadow">


		<?php echo $sf_content ?>

	</div>

	<div id="extended" class="clearfix shadow">
		<div id="trio1">
			<div class="inner">
				<h3>Standards-compliant code</h3>
				<p>The Inland Wood template is written with standards-compliant HTML5 and CSS3.</p>
			</div>
		</div>

		<div id="trio2">
			<div class="inner">
				<h3>Slider included</h3>
				<p>The slider is made with a jQuery plugin called <a href="http://nivo.dev7studios.com">Nivo Slider</a>, created by Gilbert Pellegrom of dev7studios and released under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT Licence</a>. The sample photos are taken by Thomas Wallström and released under a CC-BY license.</p>
			</div>
		</div>

		<div id="trio3">
			<div class="inner">
				<h3>Multiple layout options</h3>
				<p>Single-column, two columns with left or right sidebars, three columns - or a combination of any two layout options.</p>
			</div>
		</div>
	</div>

	<div id="footer" class="shadow">
		<p>&copy; 2014 James Tarleton | Design by <a href="http://andreasviklund.com/">andreasviklund.com</a><br />Generated by <a href="http://www.kazila.com" title="Kazila">kazila</a></p>
	</div>
</div>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
</body>
</html>
