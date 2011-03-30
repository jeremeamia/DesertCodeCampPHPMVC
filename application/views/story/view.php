<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title; ?> - Sprint Planner</title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="/assets/js/libs/modernizr-1.7.min.js"></script>
</head>

<body id="<?php echo trim($request->directory().'_'.$request->controller().'_'.$request->action(), '_'); ?>" class="no-layout">
	<div id="main" role="main">

		<h1><?php echo $title; ?></h1>
		<div class="breadcrumbs">
			<a href="<?php echo URL::site('story/index'); ?>">&laquo; Back to Story Index</a>
		</div>
		<div class="story card" id="story_#<?php echo $story->id; ?>">
			<span class="story-number"><?php echo $story->type; ?> #<?php echo $story->id; ?></span>
			<span class="story-theme">Theme: <?php echo $story->theme; ?></span>
			<span class="story-points"><?php echo $story->points; ?> pts</span>
			<p class="story-description"><?php echo $story->description; ?></p>
			<a class="ir story-action view" href="<?php echo URL::site('story/view/'.$story->id); ?>">View Story #<?php echo $story->id; ?></a>
			<a class="ir story-action edit" href="<?php echo URL::site('story/edit/'.$story->id); ?>">Edit Story #<?php echo $story->id; ?></a>
			<a class="ir story-action delete" href="<?php echo URL::site('story/delete/'.$story->id); ?>">Delete Story #<?php echo $story->id; ?></a>
		</div>

	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='/assets/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="/assets/js/script.js"></script>
  
</body>
</html>