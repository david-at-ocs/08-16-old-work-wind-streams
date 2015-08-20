<?php include 'contact-send.php'; extract(processTheForm('info@windstream-inc.com')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<title>Contact WindStream Technologies, Inc. - ECOnomical Wind Energy</title>
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
	
<!----------------------------------------------- Header starts here --------------------------------------------------------- -->
	
		<div id="headercontainer">
			<ul id="logocontainer">
				<li><a id="home" href="home.html" title="Home"><span>Home</span></a></li>
			</ul>
			<div id="headlinecontainer"><h1>Unleashing affordable wind energy for the mainstream.</h1></div>
			<ul id="nav">
				<li><a id="contact" href="contact.php" title="Contact WindStream"><span>Contact</span></a></li>
				<li><a id="careers" href="careers.html" title="Careers at WindStream"><span>Careers</span></a></li>
				<li><a id="press" href="press.html" title="Press Center"><span>Press Center</span></a></li>
				<li><a id="products" href="products.html" title="WindStream Products"><span>Products</span></a></li>
				<li><a id="company" href="company.html" title="About WindStream"><span>About Us</span></a></li>
			</ul>
		</div>
	
<!----------------------------------------------- Banner starts here --------------------------------------------------------- -->
	
		<div id="spacer">&nbsp;</div>
		<div id="bannerbackgound" style="height: 164px;">
			<div id="bannercontainer">
		    	<img src="images/banners/bokeh-banner-940x164.jpg" width="940" height="164" alt="Light Bulbs" title="Light">
			</div>
		</div>	
	
<!----------------------------------------------- Body starts here --------------------------------------------------------- -->

		<div id="bodybg">
			<div id="spacer2">&nbsp;</div>
			<div id="bodycontainer" style="height: 550px;">
				<ul id="4col">
					<li class="col1" style="margin-left: 0; width: 655px; height: 500px;">
						<p class="colheadline" style="width: 640px; font-size: 12pt;">Contact WindStream Technologies, Inc.</p>
						<p class="productbody" style="padding-top: 10px;">Get in touch with our management team and company staff regarding any media inquiry, investor question, or for prospective client work. </p>
						<p class="productbody" style="padding-top: 10px;">						
						
							<!--  Begin form -->
							<?php if(isset($mail_error) && $mail_error) { ?>
	                        <p class="succes">The email has NOT been sent!</p>
	                        <?php } elseif(isset($mail_error)) { ?>
	                        <p class="succes">The email was sent succesfully!</p>
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
	
	                            <div class="holder">
	                                <label for="subject">Subject:  </label>
	                                <input type="text" name="subject" value="<?php echo @$_POST['subject']; ?>" />
	                            </div>
	
	                            <div class="holder">
	                                <label for="message">Message: <span class="blue">*</span></label>
	                                <textarea rows="10" cols="10" name="message"><?php echo @$_POST['message']; ?></textarea>
	                                <?php if(isset($errors['message'])) { ?> <?php echo $errors['message']; ?> <?php } ?>
	                            </div>
	
	                            <div class="clear"></div>
	
	                            <input type="submit" value="SEND" class="send" />
	                            
	                        </form>  
	                        
	                        <!--  End form -->
	                    </p>
						
					</li>
					<li class="col1" style="margin-right: 0; width: 230px; height: 500px;">
						<p class="colheadline" style="width: 210px; font-size: 12pt;">Our Headquarters</p>
						<p class="colnews">
							Windstream Technologies, Inc.<br />
							Purdue Technology Center<br />
							3000 Technology Avenue<br />
							New Albany, IN 47150<br />
							USA
						</p>
						<p class="colheadline" style="width: 210px; font-size: 12pt; padding-top: 20px;">Contact Details</p>
						<p class="colnews">
							T: (812) 206-8099<br />
							<SCRIPT>
<!--
// iScramble 1.0 from http://www.z-host.com/php/iscramble
var a='';var b='2rafemoa% 0eioa%@m3 C3oii%nna 3%tw-2ii/ %hmnrofem %fl@m2w-C 322As.itcEEaD%nn3dc%A02itcnro %%%3dcEs.3';var c='7968401532';for(var i=0;i<10;i++) for(var j=0;j<10;j++) a+=b.charAt((parseInt(c.charAt(j))*10)+i);document.writeln(unescape(a));
// -->
</SCRIPT>
<NOSCRIPT>
<I>[Please Enable JavaScript]</I>
</NOSCRIPT>

						</p>
						<p class="colheadline" style="width: 210px; font-size: 12pt; padding-top: 20px;">More About Us</p>
						<ul class="colnews">
							<li><a href="management.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Management</span></a></li>
							<li><a href="press.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Press Center</span></a></li>
							<li><a href="investors/index.html"><span><img src="images/nav/right-arrow.png" border="0" width="13" height="13" alt="right arrow" style="padding-top: 2px; float:left;" />Investor Relations (login required)</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="footer">
			<p id="footermenu"><a class="footeritem" href="home.html">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="company.html">Company</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="products.html">Products</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="careers.html">Careers</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="contact.php">Contact</a><!--&nbsp;&nbsp;|&nbsp;&nbsp;<a class="footeritem" href="sitemap.html">Sitemap</a>--></p></p>
			<p id="copyright">&copy;2011 WindStream Technologies, Inc.</p>
		</div>

		
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/awea.json?callback=twitterCallback2&amp;count=1"></script>		

	</body>

</html>