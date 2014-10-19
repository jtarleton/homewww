<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="inland-wood.css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<title>The Inland Wood CSS template</title>
</head>

<body>
<div id="wrapper960" class="clearfix">
	<div id="toplinks">
		<ul class="toplinks_links">
			<li><a href="#">Top link #1</a></li>
			<li><a href="#">Top link #2</a></li>
			<li><a href="#">Top link #3</a></li>
			<li><a href="#">Top link #4</a></li>
		</ul>
	</div>

	<div id="header" class="clearfix shadow">
		<div id="sitetitle" class="clearfix">
			<h1><a href="index.html">inland</a></h1>
		</div>

		<div id="nav" class="clearfix">
			<ul>
				<li><a href="index.html">Default layout</a></li>
				<li><a href="2-columns-left.html">2 columns (left)</a></li>
				<li><a class="current" href="2-columns-right.html">2 columns (right)</a></li>
				<li><a href="3-columns.html">3 columns</a></li>
				<li><a href="full-width.html">Full width</a></li>
			</ul>
		</div>
	</div>

	<div id="header-image">
		<img src="images/slider3.jpg" alt="" />
	</div>

	<div id="content" class="clearfix shadow">
		<div id="sidebar" class="right">
			<div class="inner">
				<h2>Right sidebar</h2>
				<p>This is the 2-column layout, with the sidebar placed on the right side. Look for the class="right" in the HTML code of the sidebar div. This example has a regular header image instead of using the image slider.</p>
			</div>
		</div>

		<div id="main" class="left">
			<h2>The Inland Wood CSS template</h2>
			<p>This is Inland Wood, the second in a new series of HTML/CSS templates from <a href="http://andreasviklund.com/">andreasviklund.com</a>. It is a multi-layout design, and the second andreasviklund.com template to feature an image slider. Inland Wood is made for template users who want a design that catches the attention of the website visitor and it is suitable for both personal websites and blogs, as well as for professional websites for companies and organizations. Like all templates by Andreas Viklund, it keeps the code simple, making the template easy to customize and build upon. To see the different layout options, click the main menu links above...</p>
		</div>
	</div>

	<div id="footer" class="shadow">
		<p>&copy; 2012 Your Name | <a href="http://andreasviklund.com/templates/inland-wood/">Template design</a> by <a href="http://andreasviklund.com/">andreasviklund.com</a><br />Best hosted at <a href="https://www.svenskadomaner.se/?ref=mall&amp;ling=en" title="Svenska Domäner AB">www.svenskadomaner.se</a></p>
	</div>
</div>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
</body>
</html>