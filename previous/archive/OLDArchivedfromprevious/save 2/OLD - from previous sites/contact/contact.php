<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send us an email or you can reach the appropriate division of WindStream:<br /><br />';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = 'WindStream Technologies, Inc.<br />3000 Technology Avenue<br />New Albany, Indiana 47150<br />(812) 206-8099';
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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />
  <meta name="robots"
        content="all" />
  <meta name="generator"
        content="RapidWeaver" />

  <title>Contact</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/moderngrunge/styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../rw_common/themes/moderngrunge/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../rw_common/themes/moderngrunge/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/moderngrunge/css/styles/blue.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/moderngrunge/css/sidebar/right.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/moderngrunge/css/header/left.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/moderngrunge/css/fonts/sansserif.css" />
        <!--[if IE 6]><style type="text/css" media="screen">body {behavior: url(../rw_common/themes/moderngrunge/csshover.htc);}</style><![endif]-->
  <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/moderngrunge/ie.css"  /><![endif]-->

<script type="text/javascript"
      src="../rw_common/themes/moderngrunge/javascript.js">
</script>
</head>

<body>
  <div id="top_grad"></div>

  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->

      <h1>WindStream Technologies</h1>

      <h2>Alternative Energy For a Mass Market</h2>
    </div><!-- End page header -->

    <div id="navcontainer">
      <!-- Start Navigation -->

      <ul>
        <li><a href="../index.html"
           rel="self">Home</a></li>

        <li><a href="../products/products.html"
           rel="self">Products</a></li>

        <li><a href="../blog/blog.html"
           rel="self">Blog</a></li>

        <li><a href="../Resources/Resources.html"
           rel="self">Resources</a></li>

        <li><a href="../management/management.html"
           rel="self">Management</a></li>

        <li><a href="../Press/press.html"
           rel="self">Press</a></li>

        <li><a href="contact.php"
           rel="self"
           id="current"
           name="current">Contact</a></li>
      </ul>
    </div><!-- End navigation -->

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->

        <div class="message-text">
          <?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <div>
            <label>Your Name:</label> *
            <br />
            <input class="form-input-field"
                 type="text"
                 value="<?php echo check('element0'); ?>"
                 name="form[element0]"
                 size="40" />
            <br />
            <br />
            <label>Your Email:</label> *
            <br />
            <input class="form-input-field"
                 type="text"
                 value="<?php echo check('element1'); ?>"
                 name="form[element1]"
                 size="40" />
            <br />
            <br />
            <label>Subject:</label> *
            <br />
            <input class="form-input-field"
                 type="text"
                 value="<?php echo check('element2'); ?>"
                 name="form[element2]"
                 size="40" />
            <br />
            <br />
            <label>Message:</label> *
            <br />
            <textarea class="form-input-field"
                 name="form[element3]"
                 rows="8"
                 cols="38">
<?php echo check('element3'); ?>
</textarea>
            <br />
            <br />

            <div style="display: none;">
              <label>Spam Protection: Please don't fill this
              in:</label> 
              <textarea name="comment"
                   rows="1"
                   cols="1">
</textarea>
            </div><input type="hidden"
                 name="form_token"
                 value="<?php echo $security_token; ?>" />
                 <input class="form-input-button"
                 type="reset"
                 name="resetButton"
                 value="Reset" /> <input class="form-input-button"
                 type="submit"
                 name="submitButton"
                 value="Submit" />
          </div>
        </form>
        <br />

        <div class="form-footer">
          <?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?>
        </div>
        <br />
        <?php unset($_SESSION['form']); ?>
      </div><!-- End content -->
    </div><!-- End main content wrapper -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div id="sidebar">
        <!-- Start sidebar content -->

        <h1 class="sideHeader">Contact:</h1><!-- Sidebar header -->
        <a href="mailto:info@windstream-inc.com"
             rel="self">info@windstream-inc.com</a>
        <br />
        <br />
        <a href="mailto:sales@windstream-inc.com"
             rel="self">sales@windstream-inc.com</a>
        <br />
        <br />
        <a href="mailto:tech@windstream-inc.com"
             rel="self">tech@windstream-inc.com</a>
        <br />
        <br />
        <!-- sidebar content you enter in the page inspector -->
         <!-- sidebar content such as the blog archive links -->
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div class="clearer"></div>

    <div id="breadcrumbcontainer">
      <!-- Start the breadcrumb wrapper -->

      <ul>
        <li><a href="../index.html">Home</a></li>

        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- End breadcrumb -->

    <div id="footer">
      <!-- Start Footer -->

      <p>© 2008 WindStream Technologies, Inc.</p>
    </div><!-- End Footer -->
  </div><!-- End container -->
</body>
</html>
