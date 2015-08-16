<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send us an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/webbusiness/styles.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/webbusiness/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="../rw_common/themes/webbusiness/handheld.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/webbusiness/css/styles/blue.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/webbusiness/css/sidebar/sidebar_right.css" />
		
		
		
		
		<script type="text/javascript" src="../rw_common/themes/webbusiness/javascript.js"></script>
		
		
		
	</head>
<body>
<div id="pageHeader"><!-- Start page header -->
	<div id="logo">&nbsp;</div>
	
	<h1>WindStream Technologies</h1>
	<h2>Renewable energy for a mass-market</h2>
</div><!-- End page header -->

<div id="navcontainer"><!-- Start Navigation -->
	<ul><li><a href="../index.html" rel="self">Home</a></li><li><a href="../page1/page1.html" rel="self">Products</a></li><li><a href="../page2/page2.html" rel="self">Blog</a></li><li><a href="../page3/page3.html" rel="self">Management</a></li><li><a href="../page4/page4.html" rel="self">Press</a></li><li><a href="../page6/page6.html" rel="self">Jobs</a></li><li><a href="page5.php" rel="self" id="current">Contact</a></li></ul>
</div><!-- End navigation -->

<div id="container"><!-- Start container -->
	<div id="top">&nbsp;</div>
	<div id="contentContainer"><!-- Start main content wrapper -->
		<div id="content"><!-- Start content -->
			
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message:</label> <br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
			<div class="clearer"></div>
			<div id="breadcrumbcontainer"><!-- Start the breadcrumb wrapper -->
				
			</div><!-- End breadcrumb -->
		</div><!-- End content -->
	</div><!-- End main content wrapper -->
	<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
		<div id="sidebar"><!-- Start sidebar content -->
			<h1 class="sideHeader">Reach us at:</h1><!-- Sidebar header -->
			<a href="mailto:info@windstream-inc.com" rel="external">info@windstream-inc.com</a><br /><br /><a href="mailto:sales@windstream-inc.com" rel="external">sales@windstream-inc.com</a><br /><br /><a href="mailto:tech@windstream-inc.com" rel="external">tech@windstream-inc.com</a> <br /><!-- sidebar content you enter in the page inspector -->
			 <!-- sidebar content such as the blog archive links -->
		</div><!-- End sidebar content -->
	</div><!-- End sidebar wrapper -->

	<div class="clearer"></div>
	<div id="bottom">&nbsp;</div>
</div><!-- End container -->

<br style="clear:both;" />
<div id="footer"><!-- Start Footer -->
	<p></p>
</div><!-- End Footer -->
</body>
</html>
