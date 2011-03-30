$(function(){

	var stories = $('#story_index .story');
	if (stories.length){
		stories.click(function(e){
			if (e.target.tagName.toLowerCase() != 'a'){
				var href = $(this).find('.story-action.view').attr('href');
				if (href == undefined){
					href = $(this).find('.story-description a').attr('href');
				}
				location = href;
				return false;
			}
		});
	}

	$('button').each(function(){
		var button = $(this);
		var link = $(document.createElement('a'))
			.attr('href', '#')
			.attr('id', button.attr('id')+'_link')
			.addClass('button')
			.html(button.html())
			.click(function(){
				button.click();
				return false;
			});
		button.after(link);
		button.hide();
	});

});





















