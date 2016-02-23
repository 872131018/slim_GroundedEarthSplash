<!DOCTYPE html>
<html lang="en">
<?php /*
* Basic Page Needs
*/ ?>
<meta charset="utf-8">
<title>Your page title here :)</title>
<meta name="description" content="">
<meta name="author" content="">
<?php /*
* Mobile Specific Metas
*/ ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php /*
* Other Meta
*/ ?>
<meta charset='utf-8'>
<?php /*
* Font
*/ ?>
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
<?php /*
* CSS
*/ ?>
<link rel="stylesheet" type="text/css" href="Skeleton-2.0.4/css/normalize.css">
<link rel="stylesheet" type="text/css" href="Skeleton-2.0.4/css/skeleton.css">
<?php /*
* Page CSS
*/ ?>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php /*
* Favicon
*/ ?>
<link rel="icon" type="image/png" href="resources/Skeleton-2.0.4/images/favicon.png">
</head>
<?php /*
* Primary Page Layout
*/ ?>
<body>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <div><h4>Grounded Earth Designs.</h4></div>
          <div><h4>Welcome.</h4></div>
          <a class="button">Behold</a>
        </div>
        <div class="six columns">
          <img class="phone" src="images/iphone.png">
          <img class="phone" src="images/iphone.png">
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <form>
            <input type="email" name="email" placeholder="Email Address">
            <input class="button" type="button" value="Sign Up" data-delegate="signup">
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php /*
	* Must load the external sources first
	*/ ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php /*
	* Then load the internal sources second
	*/ ?>
  <script type="text/javascript" src="js/validateSignup.js"></script>
	<?php /*
	* Load the driver for execution
	*/ ?>
	<script type="text/javascript" src="js/splashDriver.js"></script>
</body>
</html>
