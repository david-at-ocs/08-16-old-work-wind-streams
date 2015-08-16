<?php include 'contact-send.php'; extract(processTheForm('office@cssluxury.com')); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CleanR - Contact page</title>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/sliding_effect.js"></script>
<script type="text/javascript" src="js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/DistrictThin_400.font.js"></script>
<script type="text/javascript">
			Cufon.replace('h1');
			Cufon.replace('h2');
			Cufon.replace('h3');
			Cufon.replace('h4');
</script>
<!--[if IE 6]>
        <script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styleIE6.css">
        <script>
          DD_belatedPNG.fix('*')
          /* string argument can be any CSS selector */
          /* .png_bg example is unnecessary */
          /* change it to what suits you! */
        </script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>

</head>

<body>
<a name="top"></a>

<div class="wrap">
	<!--  Begin header -->
	<div class="header">
    	<a class="logo" href="index.html">CleanR - Clean business</a>
        <!--  Begin menu -->
        <div class="nav_holder">
                
            <div class="nav">
                <h3>Company</h3>
                <ul class="sliding-navigation">
                    <li class="sliding-element"><a href="about.html">About us</a></li>
                    <li class="sliding-element"><a href="team.html">The team</a></li>
                </ul>
            </div>
            
            <div class="nav">
                <h3>Services</h3>
                <ul class="sliding-navigation">
                    <li class="sliding-element"><a href="services.html">Services list</a></li>
                    <li class="sliding-element"><a href="process.html">Our process</a></li>
                </ul>
            </div>
            
            <div class="nav">
                <h3>Portfolio</h3>
                <ul class="sliding-navigation">
                    <li class="sliding-element"><a href="portfolio.html">Branding</a></li>
                    <li class="sliding-element"><a href="portfolio.html">Publishing</a></li>
                    <li class="sliding-element"><a href="portfolio.html">Website Design</a></li>
                    <li class="sliding-element"><a href="portfolio.html">Advertising</a></li>
                </ul>
            </div>
            
            <div class="nav">
                <h3>Blog</h3>
                <ul class="sliding-navigation">
                    <li class="sliding-element"><a href="blog.html">News</a></li>
                    <li class="sliding-element"><a href="blog.html">Showreel</a></li>
                    <li class="sliding-element"><a href="blog.html">Web development</a></li>
                </ul>
            </div>
            
            <div class="nav">
                <h3>Contact</h3>
                <ul class="sliding-navigation">
                    <li class="sliding-element"><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        	
        </div>
        <!--  End menu -->
    </div>
    <!--  End header -->
    
    <!--  End left column -->
    <div class="left_column">
    	<!--  Begin breadcrumb -->
        <div class="breadcrumb">
        	<ul>
            	<li><a href="#">Contact</a></li>
            </ul>
        </div>
    	<!--  End breadcrumb -->
        
        <!--  Begin slideshow -->
    	<div class="slideshow_holder_subpages">
        
            <ul class="slideshow">
                    <li><img src="images/gallery/image4.jpg" alt="#" width="710" height="160" /></li>
                    <li><img src="images/gallery/image5.jpg" alt="#" width="710" height="160" /></li>
                    <li><img src="images/gallery/image6.jpg" alt="#" width="710" height="160" /></li>
            </ul>
        
        </div>
        <!--  End slideshow -->
        
       	<h1>Contact us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat metus, elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat metus, elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat metus, elementum.
</p>
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
        
        <div class="clear"></div>
        
        <!--  Begin equal columns -->
        <div class="box_container" id="equalize">
        
            <div class="box">
                <h4>Download our brochure</h4>
                <a class="downloads" href="#"><img src="images/portfolio.png" alt="#" /></a>
            </div>
            
            <div class="box">
                <h4>Download our vCard</h4>
                <a class="downloads" href="#"><img src="images/vcard.png" alt="#" /></a>
            </div>
            
            <div class="box no_margin">
                <h4>Download our client list</h4>
                <a class="downloads" href="#"><img src="images/clientlist.png" alt="#" /></a>
            </div>
        
        </div>
        <!--  End equal columns -->
        
    </div>
    <!--  End left column -->
    
    <!--  Begin right column -->
    <div class="right_column">
    	<!--  Begin search form -->
    	<form method="post" id="searchform" action="#">
        
            <input value="" name="s" id="s" type="text" />
            <input id="searchsubmit" value="" type="submit" />
    
        </form>
        <!--  End search box -->  
    
    	<!--  Begin box our office -->
    	<div class="box">
        	<h4>Our office</h4>
            <address> 
            	Street address no.5643<br />
                Other details, Business Center<br />
                Postal code<br />
                Country<br />
            </address> 
            
            <address class="geo">
            	 Geo location: 41.263480, -15.3462672. (Use Google map coordinates here)
            </address>
            
        </div>
        <!--  End box our office -->
        
        <!--  Begin contact detail box -->
        <div class="box">
        	<h4>Contact details</h4>
            <ul>
                <li>T: +(45)552.555.555</li>
                <li>F: +(45)552.555.656</li>
                <li class="email">E: <a href="mailto:office@ccsluxury.com">office@cssluxury.com</a></li>
            </ul>
        </div>
        <!--  End contact detail box -->
        
        <!--  Begin get social box -->
        <div class="box">
        	<h4>Get social</h4>
            <ul class="team_social">
                <li><a class="twitter" href="#">Twitter</a></li>
                <li><a class="facebook" href="#">Facebook</a></li>
                <li><a class="linkedin" href="#">LinkedIn</a></li>
                <li><a class="flickr" href="#">Flickr</a></li>
                <li><a class="delicious" href="#">Delicious</a></li>
       		</ul>
        </div>
   		<!--  End get social box -->
    </div>
    <!--  End right column -->
    
    <!--  Begin footer -->
    <div class="footer">
    	<p class="left">Copyright &copy;2009 - All rights reserved Your Company name</p>
        <p class="right">Go up <a href="#top">Top</a></p>
    </div>
    <!--  End footer -->

</div>

</body>
</html>
