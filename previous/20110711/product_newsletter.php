<?php include 'contact-send.php'; extract(processTheForm('news@windstream-inc.com')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<title>About WindStream Technologies, Inc. - ECOnomical Wind Energy</title>
		<link rel="Shortcut Icon" href="ws.ico" />
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/windstream.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19784330-4']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
    
	</head>

	<body class="wrap">
	
<!----------------------------------------------- Header starts here ----------------------------------------------------------->
	
		<div id="headercontainer">
			<ul id="logocontainer">
				<li><a id="home" href="index.html" title="Home"><span>Home</span></a></li>
			</ul>
			<!--<div id="logocontainer" title="WindStream Technologies Logo"><span>WindStream Technologies, Inc.</span></div>-->
			<div id="headlinecontainer"><h1>Unleashing affordable wind energy for the mainstream.</h1></div>
			<ul id="nav">
				<li><a id="contact" href="contact.php" title="Contact WindStream"><span>Contact</span></a></li>
				<li><a id="careers" href="careers.html" title="Careers at WindStream"><span>Careers</span></a></li>
				<li><a id="products" href="products.html" title="WindStream Products"><span>Products</span></a></li>
				<li><a id="company" href="company.html" title="About WindStream"><span>About Us</span></a></li>
			</ul>
		</div>
	
<!----------------------------------------------- Banner starts here ----------------------------------------------------------->
	
		<div id="spacer">&nbsp;</div>
		<div id="bannerbackgound" style="height: 164px;">
			<div id="bannercontainer">
		    	<img src="images/banners/blowing-banner-940x164.jpg" width="940" height="164" alt="New Albany, IN" title="New Albany, IN">
			</div>
		</div>	
	
<!----------------------------------------------- Body starts here ----------------------------------------------------------->

		<div id="bodybg">
			<div id="spacer2">&nbsp;</div>
			<div id="bodycontainer" style="height: 550px;">
				<ul id="4col">
					<li class="col1" style="margin-left: 0; width: 655px; height: 500px;">
						<p class="colheadline" style="width: 640px; font-size: 12pt;">Product Updates from WindStream Technologies, Inc.</p>
						<p class="productbody" style="padding-top: 10px;">Subscribe to official announcements on TurboMill product availability, upgrades, and essential media releases. We will never share, sell, or otherwise distribute your name or contact details. We hate spam as much as you do.</p>
						<p class="productbody" style="padding-top: 10px;">
						
							<!--  Begin form -->
							<?php if(isset($mail_error) && $mail_error) { ?>
	                        <p class="succes">The email has NOT been sent!</p>
	                        <?php } elseif(isset($mail_error)) { ?>
	                        <p class="succes">Check your inbox for a confirmation that you have successfully subscribed to our product updates.</p>
	                        <?php } ?>
	                            <form action="" class="form-contact" method="post">
	
	                            <div class="holder">
	                                <label for="name">Name:<span class="blue">*</span>  </label>
	                                <input type="text" name="name" value="<?php echo @$_POST['name']; ?>" />
	                                <?php if(isset($errors['name'])) { ?> <?php echo $errors['name']; ?> <?php } ?>
	                            </div>
	
	
	
	                            <div class="holder">
	                                <input type="text" name="middle-name" style="display:none;" />
	                                <label for="email">Email:<span class="blue">*</span>  </label>
	                                <input type="text" name="email" value="<?php echo @$_POST['email']; ?>" />
	                                <?php if(isset($errors['email'])) { ?> <?php echo $errors['email']; ?> <?php } ?>
	                            </div>
	
	                            <div class="clear"></div>
	
	                            <input type="submit" value="SUBSCRIBE " class="send" style="font-size: 9pt;" />
	                            
	                        </form>  
	                        
	                        <!--  End form -->
						
						
						
						</p>
					</li>
					<li class="col1" style="margin-right: 0; width: 225px; height: 500px;">
						<p class="colheadline" style="width: 210px; font-size: 12pt;">More About Us</p>
						<ul class="colnews">
							<li><a href="company.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Company</span></a></li>
							<li><a href="management.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Management</span></a></li>
							<li><a href="press.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Press Center</span></a></li>
						</ul>
						<p class="colheadline" style="width: 210px; font-size: 12pt; padding-top: 20px;">Links</p>
						<ul class="colnews">
							<li><a href="http://www.leagueofgreenembassies.org/"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />League of Green Embassies</span></a></li>
							<li><a href="http://www.leagueofgreenembassies.org/?p=314"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Video: Embassador Oreck and CEO Dan Bates at the U.S. Embassy in Helsinki, Finland</span></a></li>
							<li><a href="product_launch.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />TurboMill Product Launch</span></a></li>
						</ul>
						<p class="colheadline" style="width: 210px; font-size: 12pt; padding-top: 20px;">Wind Sector News</p>
						<ul class="tweetnews">
							<li><ul id="twitter_update_list"></ul></li>
							<li style="padding-top: 10px;"><a href="http://twitter.com/#!/awea" style="text-decoration: none;"><img src="images/nav/twitter-16x16.png" border="0" alt="Twitter" title="Twitter" style="float:left; padding-top: 2px; padding-right: 5px;" /> <span  style="text-decoration: underline;">Wind sector news on Twitter</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="footer">
			<p id="footermenu"><a class="footeritem" href="index.html">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="company.html">Company</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="products.html">Products</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="careers.html">Careers</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="contact.php">Contact</a><!--&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="sitemap.html">Sitemap</a>--></p></p>
			<p id="copyright">&copy;2011 WindStream Technologies, Inc.</p>
		</div>

		
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/awea.json?callback=twitterCallback2&amp;count=1"></script>		

	</body>

</html>