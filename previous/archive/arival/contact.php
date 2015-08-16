<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>parker&amp;kent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/skin.css" />
	
	<!--[if IE 6]>
		<script type="text/javascript" src="jscript/belated_png.js"></script>
		<script type="text/javascript">
			DD_belatedPNG.fix(".logo a, #gallery_shadow");
		</script>
	<![endif]-->
    	
	<script type="text/javascript" src="jscript/jquery_1.3.2.js"></script>
	<script type="text/javascript" src="jscript/jquery_cycle.js"></script>
	<script type="text/javascript" src="jscript/superfish.js"></script>
	<script type="text/javascript" src="jscript/custom.js"></script>
</head>

<body>
	
	<!-- start #menu -->
	<div class="wrapper" id="menu">
		<div class="center_div">
			<h1 class="logo"><a href="index.html" title="Your Name">Parker&amp;Kent</a></h1>
			<ul class="sf-menu">
				<li><a href="index.html" title="Home">Home<span>Index page</span></a>
					<ul>
						<li><a href="index_no_flash.html" title="Index No Flash">Index No Flash</a></li>
					</ul>
				</li>
				<li><a href="about.html" title="About">About<span>Our company</span></a>
					<ul>
						<li><a href="about.html#history" title="History">History</a></li>
						<li><a href="about.html#philosophy" title="Philosophy">Philosophy</a></li>
						<li><a href="about.html#mission" title="Our Mission">Our Mission</a></li>
						<li><a href="single_news_page.html" title="Single News Page">Single News Page</a></li>
						<li><a href="single_work_page.html" title="Single Work Page">Single Work Page</a></li>
						<li><a href="full_width_page.html" title="Full Width Page">Full Width Page</a></li>
						<li><a href="#" title="Sub menu">Sub menu</a>
							<ul>
								<li><a href="blog.html" title="Blog">Blog</a></li>
								<li><a href="contact.php" title="Contact">Contact</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="galleries.html" title="Galleries">Galleries<span>Our showcase</span></a></li>
				<li><a href="blog.html" title="Blog">Blog<span>Read our blog</span></a></li>
				<li class="current"><a href="" title="Contacts">Contact<span>Send us an email</span></a></li>
			</ul>
		</div>
	</div>
	<!-- end #menu -->
	
	<!-- start #main -->
	<div class="wrapper" id="header_page">
		<div class="center_div" id="gallery_shadow">
			<div id="left">
				<h2 id="sidebar_first_title">Our contacts</h2>
				<ul id="sub_nav">
					<li><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
					<li><span>Tel: 0041 123 45 67</span></li>
					<li><span>Mobile: 0041 123 45 67</span></li>
					<li><span>Fax: 0041 123 45 67</span></li>
				</ul>
				<p class="address">23a Street, 123/A<br />6900 Lugano - TI<br />Switzerland</p>
				<p class="contact_text">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div id="right">
				<div id="gallery">
					<img src="images/photos/about/04.jpg" alt="" />
					<img src="images/photos/about/03.jpg" alt="" />
					<img src="images/photos/about/06.jpg" alt="" />
				</div>
				
				<!-- start #form -->
				<div id="form">
					<form id="formMail" action="">
						<fieldset>
							<input type="text" name="name" id="name" tabindex="1" value="<?= $_POST['name']; ?>" /><label for="name">Name<span>Required</span></label>
							<input type="text" name="email" id="email" tabindex="2" value="<?= $_POST['email']; ?>" /><label for="email">Email<span>Required</span></label>
							<input type="text" name="subject" id="subject" tabindex="3" value="<?= $_POST['subject']; ?>" /><label for="subject">Subject<span>Required</span></label>
						</fieldset>
						<fieldset>
							<textarea name="message" id="message" rows="" cols="" tabindex="4"><?= $_POST['message']; ?></textarea><label for="message">Message<span>Required</span></label>
						</fieldset>
						<div>
							<input class="btn" name="submit" type="submit" id="submit" tabindex="5" value="Send" />
						</div>
					</form>
					<div id="alert"></div>
				</div>
				<!-- end #form -->
				
			</div>
		</div>
	</div>
	<!-- end #main -->
	
	<!-- start #footer -->
	<div class="wrapper" id="footer">
		<div class="center_div">
			<div id="footer_contents">
				<p>Your copyright - footer info here</p>
				<ul>
					<li>|</li>
					<li><a href="#" title=""><img src="images/network_icons/feed.gif" alt="Feed" /></a></li>
					<li><a href="#" title=""><img src="images/network_icons/twitter.gif" alt="Twitter" /></a></li>
					<li><a href="#" title=""><img src="images/network_icons/facebook.gif" alt="Facebook" /></a></li>
				</ul>
				<form action="" method="get">
					<div>
						<input type="text" class="input_search" name="search_field" value="..." onfocus="if (this.value == '...') {this.value = '';}" onblur="if (this.value == '') {this.value = '...';}" />
						<input type="submit" value="search" class="button_search" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end #footer -->
	
</body>
</html>