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
					<option value="Story"<?php echo (Arr::get($values, 'type') === 'Story')?' selected="selected"':NULL; ?>>Story</option>
					<option value="Chore"<?php echo (Arr::get($values, 'type') === 'Chore')?' selected="selected"':NULL; ?>>Chore</option>
				</select>
				<?php if (isset($errors['type'])): ?>
				<div class="error"><?php echo $errors['type']; ?></div>
				<?php endif; ?>
			</div>
			<div class="description field">
				<label for="description">Description</label>
				<textarea name="description" id="description" cols="40" rows="4"><?php echo Arr::get($values, 'description'); ?></textarea>
				<?php if (isset($errors['description'])): ?>
				<div class="error"><?php echo $errors['description']; ?></div>
				<?php endif; ?>
			</div>
			<div class="points field">
				<select name="points" id="type">
					<option value="">Points...</option>
					<option value="0"<?php echo (Arr::get($values, 'points') === '0')?' selected="selected"':NULL; ?>>0</option>
					<option value="1"<?php echo (Arr::get($values, 'points') === '1')?' selected="selected"':NULL; ?>>1</option>
					<option value="2"<?php echo (Arr::get($values, 'points') === '2')?' selected="selected"':NULL; ?>>2</option>
					<option value="3"<?php echo (Arr::get($values, 'points') === '3')?' selected="selected"':NULL; ?>>3</option>
					<option value="5"<?php echo (Arr::get($values, 'points') === '5')?' selected="selected"':NULL; ?>>5</option>
					<option value="8"<?php echo (Arr::get($values, 'points') === '8')?' selected="selected"':NULL; ?>>8</option>
					<option value="13"<?php echo (Arr::get($values, 'points') === '13')?' selected="selected"':NULL; ?>>13</option>
					<option value="20"<?php echo (Arr::get($values, 'points') === '20')?' selected="selected"':NULL; ?>>20</option>
					<option value="50"<?php echo (Arr::get($values, 'points') === '50')?' selected="selected"':NULL; ?>>50</option>
					<option value="100"<?php echo (Arr::get($values, 'points') === '100')?' selected="selected"':NULL; ?>>100</option>
				</select>
				<?php if (isset($errors['points'])): ?>
				<div class="error"><?php echo $errors['points']; ?></div>
				<?php endif; ?>
			</div>
			<div class="theme field">
				<label for="theme">Theme</label>
				<input type="text" name="theme" id="theme" value="<?php echo Arr::get($values, 'theme'); ?>" />
				<?php if (isset($errors['theme'])): ?>
				<div class="error"><?php echo $errors['theme']; ?></div>
				<?php endif; ?>
			</div>
			<div class="notes field">
				<label for="notes">Notes</label>
				<textarea name="notes" id="notes" cols="40" rows="4"><?php echo Arr::get($values, 'notes'); ?></textarea>
				<?php if (isset($errors['notes'])): ?>
				<div class="error"><?php echo $errors['notes']; ?></div>
				<?php endif; ?>
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
