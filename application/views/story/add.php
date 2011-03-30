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
	<div class="story-form">
		<?php echo Form::open($request); ?>
			<div class="type field">
				<select name="type" id="type">
					<option value="">Select a Type...</option>
					<option value="story">User Story</option>
					<option value="chore">Chore</option>
				</select>
			</div>
			<div class="description field">
				<label for="description">Description</label>
				<textarea name="description" id="description" cols="40" rows="4"></textarea>
			</div>
			<div class="points field">
				<select name="type" id="type">
					<option value="">Points...</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="8">8</option>
					<option value="13">13</option>
					<option value="20">20</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select>
			</div>
			<div class="theme field">
				<label for="theme">Theme</label>
				<input type="text" name="theme" id="theme" />
			</div>
			<div class="notes field">
				<label for="notes">Notes</label>
				<textarea name="notes" id="notes" cols="40" rows="4"></textarea>
			</div>
			<div class="add field">
				<button type="submit">Add</button>
			</div>
		<?php echo Form::close(); ?>
	</div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='/assets/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  <script src="/assets/js/script.js"></script>
</body>
</html>
