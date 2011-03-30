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
		<div id="form_story_add" class="card">
			<?php echo Form::open($request); ?>
				<div id="type_field" class="field">
					<select name="type" id="type">
						<option value="">Select a Story Type...</option>
						<option value="Story"<?php echo (Arr::get($values, 'type') === 'Story')?' selected="selected"':NULL; ?>>Story</option>
						<option value="Chore"<?php echo (Arr::get($values, 'type') === 'Chore')?' selected="selected"':NULL; ?>>Chore</option>
					</select>
					<?php if (isset($errors['type'])): ?>
					<div class="error"><?php echo $errors['type']; ?></div>
					<?php endif; ?>
				</div>
				<div id="description_field" class="field">
					<label for="description">Description</label>
					<textarea name="description" id="description" cols="40" rows="4" placeholder="As a User, I can&hellip;"><?php echo Arr::get($values, 'description'); ?></textarea>
					<?php if (isset($errors['description'])): ?>
					<div class="error"><?php echo $errors['description']; ?></div>
					<?php endif; ?>
				</div>
				<div id="points_field" class="field">
					<?php $point_options = array('0', '1', '2', '3', '5', '8', '13', '20', '40', '100'); ?>
					<select name="points" id="type">
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
				<div id="theme_field" class="field">
					<label for="theme">Theme</label>
					<input type="text" name="theme" id="theme" value="<?php echo Arr::get($values, 'theme'); ?>" />
					<?php if (isset($errors['theme'])): ?>
					<div class="error"><?php echo $errors['theme']; ?></div>
					<?php endif; ?>
				</div>
				<div id="notes_field" class="field">
					<label for="notes">Notes</label>
					<textarea name="notes" id="notes" cols="40" rows="4"><?php echo Arr::get($values, 'notes'); ?></textarea>
					<?php if (isset($errors['notes'])): ?>
					<div class="error"><?php echo $errors['notes']; ?></div>
					<?php endif; ?>
				</div>
				<div id="submit_field" class="field button-group">
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
