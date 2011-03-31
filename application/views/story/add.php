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
			<a href="<?php echo URL::site('story/index'); ?>" class="button small">&lt;&ensp;Back to Story Index</a>
		</div>
		<div id="form_story_add" class="card">
			<?php echo Form::open($request); ?>
				<div id="type_field" class="field clearfix">
					<label for="points" class="required">Story Type</label>
					<div class="input">
						<?php $type_options = array('Story', 'Chore'); ?>
						<select name="type" id="type">
							<option value="">Story Types&hellip;</option>
							<?php foreach ($type_options as $type_value): ?>
								<?php $selected = (Arr::get($type_options, 'type') === $type_value) ? ' selected="selected"' : ''; ?>
								<option value="<?php echo $type_value; ?>"<?php echo $selected; ?>><?php echo $type_value; ?></option>
							<?php endforeach; ?>
						</select>
						<?php if (isset($errors['type'])): ?>
							<div class="error"><?php echo $errors['type']; ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div id="description_field" class="field clearfix">
					<label for="description" class="required">Description</label>
					<div class="input">
						<textarea name="description" id="description" cols="60" rows="3" placeholder="As a User, I can&hellip;"><?php echo HTML::chars(Arr::get($values, 'description')); ?></textarea>
						<?php if (isset($errors['description'])): ?>
							<div class="error"><?php echo $errors['description']; ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div id="points_field" class="field clearfix">
					<label for="points" class="required">Story Points</label>
					<div class="input">
						<?php $point_options = array('0', '1', '2', '3', '5', '8', '13', '20', '40', '100'); ?>
						<select name="points" id="points">
							<option value="">Points&hellip;</option>
							<?php foreach ($point_options as $point_value): ?>
								<?php $selected = (Arr::get($values, 'points') === $point_value) ? ' selected="selected"' : ''; ?>
								<option value="<?php echo $point_value; ?>"<?php echo $selected; ?>><?php echo $point_value; ?></option>
							<?php endforeach; ?>
						</select>
						<?php if (isset($errors['points'])): ?>
							<div class="error"><?php echo $errors['points']; ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div id="theme_field" class="field clearfix">
					<label for="theme" class="required">Theme</label>
					<div class="input">
						<input type="text" name="theme" id="theme" value="<?php echo HTML::chars(Arr::get($values, 'theme')); ?>" maxlength="15">
						<?php if (isset($errors['theme'])): ?>
							<div class="error"><?php echo $errors['theme']; ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div id="notes_field" class="field clearfix">
					<label for="notes">Notes</label>
					<div class="input">
						<textarea name="notes" id="notes" cols="60" rows="6"><?php echo HTML::chars(Arr::get($values, 'notes')); ?></textarea>
						<?php if (isset($errors['notes'])): ?>
							<div class="error"><?php echo $errors['notes']; ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div class="button-group clearfix">
					<button id="submit" type="submit">Add Story</button>
				</div>
			<?php echo Form::close(); ?>
		</div>

	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='/assets/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="/assets/js/script.js"></script>
</body>
</html>
