<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $title; ?> - Sprint Planner</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/libs/modernizr-1.7.min.js"></script>
</head>
<body id="<?php echo trim($request->directory().'_'.$request->controller().'_'.$request->action(), '_'); ?>">
  <div id="main" role="main">
	<h1><?php echo $title; ?></h1>
	<?php if ($stories): ?>
	  <div class="stories">
	    <div class="story">
          STORY
	    </div>
	  </div>
	<?php else: ?>
	  <div class="no-stories">
	    NO STORIES
	  </div>
	<?php endif; ?>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  <script src="js/script.js"></script>
</body>
</html>