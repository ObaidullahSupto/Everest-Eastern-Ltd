
jQuery(document).ready(function($){

	$('.progress-bar > span').each(function(){
		var $this = $(this);
		var width = $(this).data('percent');
		$this.css({
			'transition' : 'width 2s'
		});
		
		setTimeout(function() {
			 
			$this.css('width', width + '%');
			 
		}, 500);
	});

});