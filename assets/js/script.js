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

});





















